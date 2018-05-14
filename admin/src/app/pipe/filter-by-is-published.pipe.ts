import { Pipe, PipeTransform } from '@angular/core';
import { Article } from '../data-model';

@Pipe({
  name: 'filterByIsPublished'
})
export class FilterByIsPublishedPipe implements PipeTransform {

  transform(articles: Article[], status: boolean | undefined): Article[] {
    if (!articles) {
      return [];
    }

    let newArticlesList: Article[];

    if (status === true) {
      newArticlesList = articles.filter(
        it => {
          return it.is_published === true;
        }
      );
    } else {
      newArticlesList = articles;
    }

    return newArticlesList;
  }

}
