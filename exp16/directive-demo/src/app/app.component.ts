import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { MyComponentComponent } from './my-component/my-component.component';
import { MyAttributeDirectiveDirective } from './my-attribute-directive.directive';
import { MyStructuralDirectiveDirective } from './my-structural-directive.directive';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, MyComponentComponent, MyAttributeDirectiveDirective, MyStructuralDirectiveDirective],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'directive-demo';
}
