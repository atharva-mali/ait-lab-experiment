import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { DirectiveDemoComponent } from './directive-demo/directive-demo.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, DirectiveDemoComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'angular-directive-demo';
}
