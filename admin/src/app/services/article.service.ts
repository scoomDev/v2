import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class ArticleService {

  constructor(private _http: Http) { }

  getArticlesList() {
    return this._http.get('http://localhost:8000/api/articles/list')
              .map(articles => articles.json());
  }

}
