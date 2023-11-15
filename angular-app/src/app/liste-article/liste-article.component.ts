import { Component } from '@angular/core';
import { ListService } from '../service/list.service';

@Component({
  selector: 'app-liste-article',
  templateUrl: './liste-article.component.html',
  styleUrls: ['./liste-article.component.scss']
})
export class ListeArticleComponent {

   list_article :any
   message : any
  constructor(private list:ListService){
    
  }
  async loadData(): Promise<void> {
    try {
      this.list_article = await this.list.getList();
    } catch (error) {
      // Handle error as needed
    }
  }

  async loadMessage(): Promise<any> {
    try {
      this.message = await this.list.getMessage();
    } catch (error) {
      // Handle error as needed
    }
  }


  ngOnInit(): void {
    this.loadData().then(() => {
      console.log('Data loaded:', this.list_article);
    });

    this.loadMessage().then(() => {
      console.log("message :" ,this.message)
    })
  }

}
