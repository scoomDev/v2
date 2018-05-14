import { Component, OnInit, OnDestroy } from '@angular/core';
import { PlatformService } from '../../services/platform.service';
import { Subject } from 'rxjs/Subject';
import { Subscription } from 'rxjs/Subscription';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Platform } from '../../data-model';

@Component({
  selector: 'app-platforms-list',
  templateUrl: './platforms-list.component.html',
  styleUrls: ['./platforms-list.component.scss']
})
export class PlatformsListComponent implements OnInit, OnDestroy {

  platformsList: Platform[];
  platformsListSubscription: Subscription;
  platformForm: FormGroup;
  editMode: Boolean = false;
  platformIdForEditMode: number;

  constructor(private platformsService: PlatformService, private formBuilder: FormBuilder) { }

  ngOnInit(): void {
    this.platformsListSubscription =  this.platformsService.platformsListSubject.subscribe(
      (categories) => {
        this.platformsList = categories;
      }
    );
    this.platformsService.getPlatformsList();
    this.platformsService.emitPlatformsList();

    this.platformForm = this.formBuilder.group({
      name: ['', Validators.required]
    });
  }

  createPlatform(): void {
    this.platformsService.createPlatform(JSON.stringify(this.platformForm.value));
    this.platformForm.reset();
  }

  edit(element): void {
    this.editMode = true;
    this.platformForm.setValue({
      name: element.name
    });
    this.platformIdForEditMode = element.id;
  }

  update(): void {
    const newPlatform = new Platform();
    newPlatform.id = this.platformIdForEditMode;
    newPlatform.name = this.platformForm.value['name'];
    this.platformsService.updatePlatform(JSON.stringify(newPlatform));
    this.platformForm.reset();
    this.editMode = false;
  }

  delete(platformId): void {
    this.platformsService.deletePlatform(platformId);
  }

  toggleEditMode() {
    this.editMode = false;
    this.platformForm.reset();
  }

  ngOnDestroy(): void {
    this.platformsListSubscription.unsubscribe();
  }

}
