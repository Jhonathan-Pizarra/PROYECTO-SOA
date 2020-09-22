import { Component, OnInit } from '@angular/core';
import { ClientelaravelService } from 'src/app/service/clientelaravel.service';

@Component({
  selector: 'app-libreria',
  templateUrl: './libreria.component.html',
  styleUrls: ['./libreria.component.css']
})
export class LibreriaComponent implements OnInit {

  title = 'librería';

  constructor(public servc: ClientelaravelService) {

    this.servc.getLibrerias().subscribe(r=>{
      console.table(r);
    })

  }

  ngOnInit(): void {
  }
  

}
