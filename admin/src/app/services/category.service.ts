import { Category } from './../data-model';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Subject } from 'rxjs/Subject';

@Injectable()
export class CategoryService {

  rootPath = 'http://localhost:8000/api/categories/';

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };

  categoriesForNewArticle: any[] = [];
  categoriesList: any[] = [];
  categoriesListSubject = new Subject<any[]>();

  constructor(private _http: HttpClient) {}

  emitCategoriesList() {
    this.categoriesListSubject.next(this.categoriesList);
  }

  getCategoriesList() {
    this._http
      .get<any[]>(this.rootPath + 'list')
      .subscribe(
        response => {
          this.categoriesList = response;
          this.emitCategoriesList();
        },
        error => console.error('erreur de chargement', error)
      );
  }

  getCategoriesById(categories: any[]) {
    categories.forEach(element => {
      this.categoriesForNewArticle.push(this.categoriesList.filter(
        el => element === el.name
      ));
    });

    return this.categoriesForNewArticle;
  }

  deleteCategory(category) {
    this._http
      .delete(this.rootPath + 'delete/' + category.id, this.httpOptions)
      .subscribe(
          res => {
          console.log(res);
          this.categoriesList = this.categoriesList.filter(
            el => category !== el
          );
          this.emitCategoriesList();
        },
        err => console.log(err),
        () => console.log('complete')
      );
  }

}
