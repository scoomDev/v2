import { Component, OnInit, OnDestroy } from '@angular/core';
import { PlatformService } from '../../services/platform.service';
import { Subject } from 'rxjs/Subject';
import { Subscription } from 'rxjs/Subscription';

@Component({
  selector: 'app-platforms-list',
  templateUrl: './platforms-list.component.html',
  styleUrls: ['./platforms-list.component.scss']
})
export class PlatformsListComponent implements OnInit, OnDestroy {

  platformsList;
  platformsListSubscription: Subscription;

  constructor(private platformsService: PlatformService) { }

  ngOnInit(): void {
    this.platformsListSubscription =  this.platformsService.platformsListSubject.subscribe(
      (categories) => {
        this.platformsList = categories;
      }
    );
    this.platformsService.getPlatformsList();
    this.platformsService.emitPlatformsList();
  }

  delete(platform): void {
    this.platformsService.deletePlatform(platform);
  }

  ngOnDestroy(): void {
    this.platformsListSubscription.unsubscribe();
  }

}
