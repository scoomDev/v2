import { Component, OnInit } from '@angular/core';

import { ArticleService } from '../services/article.service';

@Component({
  selector: 'app-articles-list',
  templateUrl: './articles-list.component.html',
  styleUrls: ['./articles-list.component.css']
})
export class ArticlesListComponent implements OnInit {
  articlesList;

  constructor(private artcileService: ArticleService) { }

  ngOnInit() {
    return this.artcileService.getArticlesList()
                      .subscribe(
                        (response => this.articlesList = response),
                        (error => console.error('il y a une erreur', error.status))
                      );
  }
}
