import { Injectable } from '@angular/core';
import { Router, NavigationStart } from '@angular/router';
import { Observable } from 'rxjs/Observable';
import { Subject } from 'rxjs/Subject';

import { Alert, AlertType } from './alert-message.model';

@Injectable()
export class AlertMessageService {

  private alertSubject = new Subject<Alert>();
  private keepAfterRouteChange = false;

  constructor(private router: Router) {
    router.events.subscribe(
      event => {
        if (event instanceof NavigationStart) {
          if (this.keepAfterRouteChange) {
            this.keepAfterRouteChange = false;
          } else {
            this.clear();
          }
        }
      }
    );
  }

  getAlert(): Observable<any> {
    return this.alertSubject.asObservable();
  }

  success(message: string, keepAfterRouteChange = false) {
    this.alert(AlertType.Success, message, keepAfterRouteChange);
  }

  info(message: string, keepAfterRouteChange = false) {
    this.alert(AlertType.Info, message, keepAfterRouteChange);
  }

  warning(message: string, keepAfterRouteChange = false) {
    this.alert(AlertType.Warning, message, keepAfterRouteChange);
  }

  error(message: string, keepAfterRouteChange = false) {
    this.alert(AlertType.Error, message, keepAfterRouteChange);
  }

  alert(type: AlertType, message: string, keepAfterRouteChange = false) {
    this.keepAfterRouteChange = keepAfterRouteChange;
    this.alertSubject.next(<Alert>{ type: type, message: message });
  }

  clear() {
    this.alertSubject.next();
  }

}
