import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AuthGuard } from './core/guards/auth.guard';
const routes: Routes = [
 
  { path: '', redirectTo: '/browse', pathMatch: 'full' },
  {
    path: 'browse',
    loadChildren: () => import('./pages/media/media.module').then((m) => m.MediaModule),
    canActivate: [AuthGuard]
  },

  {
    path: 'auth',
    loadChildren: () => import('./pages/auth/auth.module').then((m) => m.AuthModule),
    // canActivate: [AuthGuard],
  },
  {
    path: '',
    loadChildren: () => import('./pages/application/application.module').then((m) => m.ApplicationModule),
    canActivate: [AuthGuard],
  },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
exports: [RouterModule]
})
export class AppRoutingModule { }
