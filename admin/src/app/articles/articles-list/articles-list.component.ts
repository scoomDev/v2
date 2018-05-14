import { Component, OnInit, OnDestroy } from '@angular/core';
import { ArticleService } from '../../services/article.service';
import { Subscription } from 'rxjs/Subscription';

@Component({
  selector: 'app-articles-list',
  templateUrl: './articles-list.component.html',
  styleUrls: ['./articles-list.component.scss']
})
export class ArticlesListComponent implements OnInit, OnDestroy {

  articlesList;
  articlesListSubscription: Subscription;

  constructor(private artcileService: ArticleService) {}

  ngOnInit(): void {
    this.articlesListSubscription =  this.artcileService.articlesListSubject.subscribe(
      (articles) => {
        this.articlesList = articles;
      }
    );
    this.artcileService.getArticlesList();
    this.artcileService.emitArticlesList();
  }

  toggleIsPublished(articleId) {
    this.artcileService.toggleIsPublishedStatus(articleId);
    console.log(articleId);
  }

  delete(article): void {
    this.artcileService.deleteArticle(article);
  }

  ngOnDestroy(): void {
    this.articlesListSubscription.unsubscribe();
  }
}
