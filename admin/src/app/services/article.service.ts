import { Subject } from 'rxjs/Subject';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs/add/operator/map';

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

  constructor(private _http: HttpClient) {}

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
        res => {
          console.log(res);
          this.emitArticlesList();
        },
        err => console.log(err)
      );
  }

  deleteArticle(article) {
    this._http
      .delete(this.rootPath + 'delete/' + article.id, this.httpOptions)
      .subscribe(
          res => {
          console.log(res);
          this.articlesList = this.articlesList.filter(
            el => article !== el
          );
          this.emitArticlesList();
        },
        err => console.log(err),
        () => console.log('complete')
      );
  }
}
