import { Subscription } from 'rxjs/Subscription';
import { PlatformService } from './../../services/platform.service';
import { CategoryService } from './../../services/category.service';
import { ArticleService } from './../../services/article.service';
import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Article, Platform, Category } from '../../data-model';
import { Router } from '@angular/router';
import { getLocaleDateTimeFormat } from '@angular/common';

@Component({
  selector: 'app-create-article',
  templateUrl: './create-article.component.html',
  styleUrls: ['./create-article.component.scss']
})
export class CreateArticleComponent implements OnInit {
  articleForm: FormGroup;

  platformsList: Platform[];
  platformsSubscription: Subscription;
  categoriesList: Category[];
  categoriesSubscription: Subscription;

  constructor(
    private formBuilder: FormBuilder,
    private articleService: ArticleService,
    private categoryService: CategoryService,
    private platformService: PlatformService,
    private router: Router
  ) { }

  ngOnInit() {
    this.platformsSubscription =  this.platformService.platformsListSubject.subscribe(
      (platforms) => {
        this.platformsList = platforms;
      }
    );
    this.platformService.getPlatformsList();
    this.platformService.emitPlatformsList();

    this.categoriesSubscription =  this.categoryService.categoriesListSubject.subscribe(
      (categories) => {
        this.categoriesList = categories;
      }
    );
    this.categoryService.getCategoriesList();
    this.categoryService.emitCategoriesList();

    this.articleForm = this.formBuilder.group({
      title: ['', [Validators.required, Validators.minLength(20), Validators.maxLength(50)]],
      articleContent: ['', [Validators.required, Validators.minLength(10)]],
      platforms: ['', Validators.required],
      categories: ['', Validators.required]
    });
  }

  get title() {
    return this.articleForm.get('title');
  }

  get articleContent() {
    return this.articleForm.get('articleContent');
  }

  get platforms() {
    return this.articleForm.get('platforms');
  }

  get categories() {
    return this.articleForm.get('categories');
  }

  createArticle() {
    if (this.articleForm.valid) {
      console.log(this.articleForm.value);
      const article = new Article();
      article.title = this.articleForm.value['title'];
      article.content = this.articleForm.value['articleContent'];
      article.author = 'Zhato';
      article.createdAt = new Date();
      article.updatedAt = new Date();
      article.isPublished = false;
      article.image = 'mon-image.jpg';

      const platforms: Platform[] = this.platformService.getPlatformsById(this.articleForm.value['platforms']);
      const categories: Category[] = this.categoryService.getCategoriesById(this.articleForm.value['categories']);

      article.platforms = platforms;
      article.categories = categories;

      console.log(article);

      this.articleService.createArticle(JSON.stringify(article));
      this.articleService.emitArticlesList();
      this.router.navigate(['/article', 'list']);
    }
  }
}
