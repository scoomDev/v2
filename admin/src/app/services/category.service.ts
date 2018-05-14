import { AlertMessageService } from './../alert-message/alert-message.service';
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

  categoriesList: any[] = [];
  categoriesListSubject = new Subject<any[]>();

  constructor(private _http: HttpClient, private alertService: AlertMessageService) {}

  emitCategoriesList() {
    this.categoriesListSubject.next(this.categoriesList);
  }

  getCategoriesList() {
    this._http
      .get<Category[]>(this.rootPath + 'list')
      .subscribe(
        response => {
          this.categoriesList = response;
          this.emitCategoriesList();
        },
        error => console.error('erreur de chargement', error)
      );
  }

  getCategoriesById(categories: any[]) {
    const categoriesForNewArticle = [];
    categories.forEach(element => {
      categoriesForNewArticle.push(this.categoriesList.filter(
        el => element === el.name
      ));
    });

    return categoriesForNewArticle;
  }

  createCategory(category) {
    this._http
      .post(this.rootPath + 'create', category, this.httpOptions)
      .subscribe(
        res => {
          const newCategory = new Category();
          newCategory.name = res['name'];
          this.categoriesList.push(newCategory);
          this.alertService.success(`"${res['name']}" à bien été créé !`);
          this.emitCategoriesList();
        }
      );
  }

  updateCategory(category) {
    this._http
      .put(this.rootPath + 'update', category, this.httpOptions)
      .subscribe(
        res => {
          this.categoriesList.map(el => el.id === res['id'] ? el.name = res['name'] : el.name = el.name);
          this.alertService.success('Le nom de la catégorie à bien été mis à jour !');
          this.emitCategoriesList();
        },
        err => console.error(err)
      );
  }

  deleteCategory(categoryId) {
    this._http
      .delete(this.rootPath + 'delete/' + categoryId, this.httpOptions)
      .subscribe(
          res => {
          this.categoriesList = this.categoriesList.filter(
            el => res['name'] !== el.name
          );
          this.alertService.warning(`"${res['name']}" à bien été supprimé !`);
          this.emitCategoriesList();
        },
        err => console.error(err)
      );
  }

}
