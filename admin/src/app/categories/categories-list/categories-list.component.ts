import { Component, OnInit, OnDestroy } from '@angular/core';
import { CategoryService } from '../../services/category.service';
import { Subject } from 'rxjs/Subject';
import { Subscription } from 'rxjs/Subscription';

@Component({
  selector: 'app-categories-list',
  templateUrl: './categories-list.component.html',
  styleUrls: ['./categories-list.component.scss']
})
export class CategoriesListComponent implements OnInit, OnDestroy {

  categoriesList;
  categoriesListSubscription: Subscription;

  constructor(private categoriesService: CategoryService) { }

  ngOnInit(): void {
    this.categoriesListSubscription =  this.categoriesService.categoriesListSubject.subscribe(
      (categories) => {
        this.categoriesList = categories;
      }
    );
    this.categoriesService.getCategoriesList();
    this.categoriesService.emitCategoriesList();
  }

  delete(category): void {
    this.categoriesService.deleteCategory(category);
  }

  ngOnDestroy(): void {
    this.categoriesListSubscription.unsubscribe();
  }

}
