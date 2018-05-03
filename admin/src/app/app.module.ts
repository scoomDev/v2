import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { ArticlesListComponent } from './articles-list/articles-list.component';

import { ArticleService } from './services/article.service';
import { SidenavComponent } from './sidenav/sidenav.component';
import { HeaderComponent } from './header/header.component';

const ROUTES: Routes = [
  { path: '', component: ArticlesListComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    ArticlesListComponent,
    SidenavComponent,
    HeaderComponent
  ],
  imports: [
    BrowserModule,
    HttpModule,
    RouterModule.forRoot(ROUTES)
  ],
  providers: [ArticleService],
  bootstrap: [AppComponent]
})
export class AppModule { }
