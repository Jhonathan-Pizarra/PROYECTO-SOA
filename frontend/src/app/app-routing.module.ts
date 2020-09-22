import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LibreriaComponent } from './demo/libreria/libreria.component';
import { LibroComponent } from './demo/libro/libro.component';

const routes: Routes = [
  { path: 'libros', component: LibroComponent },
  { path: 'librerias', component: LibreriaComponent },
  { path: '**', redirectTo: '/', pathMatch: 'prefix' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
