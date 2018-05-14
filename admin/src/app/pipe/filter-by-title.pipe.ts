import { Article } from './../data-model';
import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filterByTitle'
})
export class FilterByTitlePipe implements PipeTransform {

  transform(articles: Article[], searchText: string): Article[] {
    if (!articles) {
      return [];
    }

    if (!searchText) {
      return articles;
    }

    searchText = searchText.toLowerCase();

    return articles.filter(
      it => it.title.toLowerCase().includes(searchText)
    );
  }

}
