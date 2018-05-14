import { Platform } from './../data-model';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Subject } from 'rxjs/Subject';
import { AlertMessageService } from '../alert-message/alert-message.service';

@Injectable()
export class PlatformService {

  rootPath = 'http://localhost:8000/api/platforms/';

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  };

  platformsList: any[] = [];
  platformsListSubject = new Subject<any[]>();

  constructor(private _http: HttpClient, private alertService: AlertMessageService) {}

  emitPlatformsList() {
    this.platformsListSubject.next(this.platformsList);
  }

  getPlatformsList() {
    return this._http
      .get<Platform[]>(this.rootPath + 'list')
      .subscribe(
        res => {
          this.platformsList = res;
          this.emitPlatformsList();
        },
        error => console.error('erreur de chargement', error)
      );
  }

  getPlatformsById(platforms: any[]) {
    const platformsForNewArticle = [];
    platforms.forEach(element => {
      platformsForNewArticle.push(this.platformsList.filter(
        el => element === el.name
      ));
    });

    return platformsForNewArticle;
  }

  createPlatform(platform) {
    this._http
      .post(this.rootPath + 'create', platform, this.httpOptions)
      .subscribe(
        res => {
          const newPlatform = new Platform();
          newPlatform.name = res['name'];
          this.platformsList.push(newPlatform);
          this.alertService.success(`"${res['name']}" à bien été créé !`);
          this.emitPlatformsList();
        }
      );
  }

  updatePlatform(platform) {
    this._http
      .put(this.rootPath + 'update', platform, this.httpOptions)
      .subscribe(
        res => {
          this.platformsList.map(el => el.id === res['id'] ? el.name = res['name'] : el.name = el.name);
          this.alertService.success('Le nom de la plateforme à bien été mis à jour !');
          this.emitPlatformsList();
        },
        err => console.error(err)
      );
  }

  deletePlatform(platformId) {
    this._http
      .delete(this.rootPath + 'delete/' + platformId, this.httpOptions)
      .subscribe(
          res => {
          this.platformsList = this.platformsList.filter(
            el => res['name'] !== el.name
          );
          this.alertService.warning(`"${res['name']}" à bien été supprimé !`);
          this.emitPlatformsList();
        },
        err => console.error(err)
      );
  }

}
