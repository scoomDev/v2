import { Component, OnInit, OnDestroy } from '@angular/core';
import { CategoryService } from '../../services/category.service';
import { Subject } from 'rxjs/Subject';
import { Subscription } from 'rxjs/Subscription';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Category } from '../../data-model';

@Component({
  selector: 'app-categories-list',
  templateUrl: './categories-list.component.html',
  styleUrls: ['./categories-list.component.scss']
})
export class CategoriesListComponent implements OnInit, OnDestroy {

  categoriesList;
  categoriesListSubscription: Subscription;
  categoryForm: FormGroup;
  editMode: Boolean = false;
  categoryIdForEditMode: number;

  constructor(private categoriesService: CategoryService, private formBuilder: FormBuilder) { }

  ngOnInit(): void {
    this.categoriesListSubscription =  this.categoriesService.categoriesListSubject.subscribe(
      (categories) => {
        this.categoriesList = categories;
      }
    );
    this.categoriesService.getCategoriesList();
    this.categoriesService.emitCategoriesList();

    this.categoryForm = this.formBuilder.group({
      name: ['', Validators.required]
    });
  }

  createCategory(): void {
    this.categoriesService.createCategory(JSON.stringify(this.categoryForm.value));
    this.categoryForm.reset();
  }

  edit(element): void {
    this.editMode = true;
    this.categoryForm.setValue({
      name: element.name
    });
    this.categoryIdForEditMode = element.id;
  }

  update(): void {
    const newCategory = new Category();
    newCategory.id = this.categoryIdForEditMode;
    newCategory.name = this.categoryForm.value['name'];
    this.categoriesService.updateCategory(JSON.stringify(newCategory));
    this.categoryForm.reset();
    this.editMode = false;
  }

  delete(categoryId): void {
    this.categoriesService.deleteCategory(categoryId);
  }

  toggleEditMode() {
    this.editMode = false;
    this.categoryForm.reset();
  }

  ngOnDestroy(): void {
    this.categoriesListSubscription.unsubscribe();
  }

}
