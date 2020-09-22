import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { LibreriaComponent } from '../demo/libreria/libreria.component';
import { Libreria } from './Libreria';
import { Libro } from './Libro';

@Injectable({
  providedIn: 'root'
})
export class ClientelaravelService {

  URL = "https://heroku-aos.herokuapp.com/api/";

  constructor(private httpc: HttpClient) { }

  getLibrerias(): Observable<Libreria>{
    return this.httpc.get<Libreria>(this.URL+'libreria');
  }
  getLibros(): Observable<Libro>{
    return this.httpc.get<Libro>(this.URL+'libro');
  }
}
