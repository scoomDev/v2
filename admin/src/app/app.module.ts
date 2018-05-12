import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { ReactiveFormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { ArticlesListComponent } from './articles/articles-list/articles-list.component';

import { SidenavComponent } from './sidenav/sidenav.component';
import { HeaderComponent } from './header/header.component';

import { CreateArticleComponent } from './articles/create-article/create-article.component';
import { ArticleShowComponent } from './articles/article-show/article-show.component';
import { CategoriesListComponent } from './categories/categories-list/categories-list.component';
import { PlatformsListComponent } from './platform/platforms-list/platforms-list.component';

import { ArticleService } from './services/article.service';
import { CategoryService } from './services/category.service';
import { PlatformService } from './services/platform.service';

const ROUTES: Routes = [
  { path: 'article/list', component: ArticlesListComponent },
  { path: 'article/create', component: CreateArticleComponent },
  { path: 'article/show/:id', component: ArticleShowComponent },
  { path: 'category/list', component: CategoriesListComponent },
  { path: 'platform/list', component: PlatformsListComponent },
];

@NgModule({
  declarations: [
    AppComponent,
    ArticlesListComponent,
    SidenavComponent,
    HeaderComponent,
    CreateArticleComponent,
    ArticleShowComponent,
    CategoriesListComponent,
    PlatformsListComponent,
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    ReactiveFormsModule,
    RouterModule.forRoot(ROUTES)
  ],
  providers: [ArticleService, CategoryService, PlatformService],
  bootstrap: [AppComponent]
})
export class AppModule { }
