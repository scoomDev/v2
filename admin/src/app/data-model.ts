export class Article {
  id: number;
  title: string;
  content: string;
  author: string;
  platforms: Platform[];
  categories: Category[];
  created_at: Date;
  updated_at: Date;
  is_published: boolean;
  image: string;
  slug: string;
}

export class Platform {
  id = 0;
  name = '';
}

export class Category {
  id = 0;
  name = '';
}
