import { Subject } from 'rxjs/Subject';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs/add/operator/map';

import { AlertMessageService } from '../alert-message/alert-message.service';

@Injectable()
export class ArticleService {
  rootPath = 'http://localhost:8000/api/articles/';

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };

  articlesList: any[] = [];
  articlesListSubject = new Subject<any[]>();

  constructor(private _http: HttpClient, private alertService: AlertMessageService) {}

  emitArticlesList() {
    this.articlesListSubject.next(this.articlesList);
  }

  getArticlesList() {
    this._http
      .get<any[]>(this.rootPath + 'list')
      .subscribe(
        response => {
          this.articlesList = response;
          this.emitArticlesList();
        },
        error => console.error('erreur de chargement', error)
      );
  }

  createArticle(article) {
    this._http
      .post(this.rootPath + 'create', article, this.httpOptions)
      .subscribe(
        response => {
          this.alertService.success('L\'article à bien été créé !');
          this.emitArticlesList();
        },
        err => console.log(err)
      );
  }

  toggleIsPublishedStatus(id) {
    this._http
      .post<any>(this.rootPath + 'toggleIsPublished/' + id, this.httpOptions)
      .subscribe(
        response => {
          console.log(response);
          if (response === true) {
            this.alertService.success('Votre article à bien été mis en ligne');
          } else {
            this.alertService.warning('Votre article à bien été mis dans les brouillon');
          }
          this.emitArticlesList();
        },
        error => console.error('une erreur s\'est produite lors du changement de status')
      );
  }

  deleteArticle(article) {
    this._http
      .delete(this.rootPath + 'delete/' + article.id, this.httpOptions)
      .subscribe(
          response => {
          this.articlesList = this.articlesList.filter(
            el => article !== el
          );
          this.emitArticlesList();
          this.alertService.warning('l\'article à bien été supprimé !');
        },
        err => console.log(err),
        () => console.log('complete')
      );
  }
}
