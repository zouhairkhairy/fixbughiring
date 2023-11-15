import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {QuestionsComponent} from "./questions/questions.component";
import { ListeArticleComponent } from './liste-article/liste-article.component';
import {HomeComponent} from "./home/home.component";

const routes: Routes = [
  { path: 'liste_article', component: ListeArticleComponent },

  { path: 'questions', component: QuestionsComponent },
   { path: '', component: HomeComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
