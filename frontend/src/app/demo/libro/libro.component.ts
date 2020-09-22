import { Component, OnInit } from '@angular/core';
import { ClientelaravelService } from 'src/app/service/clientelaravel.service';

@Component({
  selector: 'app-libro',
  templateUrl: './libro.component.html',
  styleUrls: ['./libro.component.css']
})
export class LibroComponent implements OnInit {

  title = 'libro';
  libros: any;
  

  constructor(public servc: ClientelaravelService) {

    

  }

  ngOnInit(): void {
    this.obtenerLibros();
  }

  obtenerLibros(){
    this.servc.getLibros().subscribe(r=>{
      console.table(r);
      return this.libros=r
    })
  }
  

}
