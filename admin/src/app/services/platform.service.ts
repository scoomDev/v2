import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Subject } from 'rxjs/Subject';

@Injectable()
export class PlatformService {

  rootPath = 'http://localhost:8000/api/platforms/';

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };

  platformsForNewArticle: any[] = [];
  platformsList: any[] = [];
  platformsListSubject = new Subject<any[]>();

  constructor(private _http: HttpClient) {}

  emitPlatformsList() {
    this.platformsListSubject.next(this.platformsList);
  }

  getPlatformsList() {
    return this._http
      .get<any[]>(this.rootPath + 'list')
      .subscribe(
        response => {
          this.platformsList = response;
          this.emitPlatformsList();
        },
        error => console.error('erreur de chargement', error)
      );
  }

  getPlatformsById(platforms: any[]) {
    platforms.forEach(element => {
      this.platformsForNewArticle.push(this.platformsList.filter(
        el => element === el.name
      ));
    });

    return this.platformsForNewArticle;
  }

  deletePlatform(platform) {
    this._http
      .delete(this.rootPath + 'delete/' + platform.id, this.httpOptions)
      .subscribe(
          res => {
          console.log(res);
          this.platformsList = this.platformsList.filter(
            el => platform !== el
          );
          this.emitPlatformsList();
        },
        err => console.log(err),
        () => console.log('complete')
      );
  }

}
