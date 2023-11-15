import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class ListService {

  constructor(private http: HttpClient) { }

  async getList(): Promise<any> {
    try {
      let response = await fetch('http://localhost/app_dev.php/api/getlist');
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    } catch (error) {
      console.error('Error fetching data:', error);
      throw error; // You can choose to handle the error here or propagate it to the caller.
    }
  }

  async getMessage(): Promise<any> {
    try {
      let response = await fetch('http://localhost/app_dev.php/api/newroute');
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    } catch (error) {
      console.error('Error fetching data:', error);
      throw error;
    }
  }
}
