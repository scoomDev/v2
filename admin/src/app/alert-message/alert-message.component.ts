import { Component, OnInit } from '@angular/core';

import { Alert, AlertType } from './alert-message.model';
import { AlertMessageService } from './alert-message.service';

@Component({
  selector: 'app-alert-message',
  templateUrl: './alert-message.component.html',
  styleUrls: ['./alert-message.component.scss']
})
export class AlertMessageComponent implements OnInit {
  alerts: Alert[] = [];

  constructor(private alerteService: AlertMessageService) { }

  ngOnInit() {
    this.alerteService.getAlert().subscribe(
      (alert: Alert) => {
        if (!alert) {
          this.alerts = [];
          return;
        }
        this.alerts.push(alert);
      });
  }

  removeAlert(alert: Alert) {
    this.alerts = this.alerts.filter(x => x !== alert);
  }

  cssClass(alert: Alert) {
    if (!alert) {
      return;
    }

    switch (alert.type) {
      case AlertType.Success:
        return 'alert alert-success';
      case AlertType.Error:
        return 'alert alert-danger';
      case AlertType.Info:
        return 'alert alert-info';
      case AlertType.Warning:
        return 'alert alert-warning';
    }
  }

}
