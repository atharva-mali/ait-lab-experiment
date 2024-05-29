import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-directive-demo',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './directive-demo.component.html',
  styleUrl: './directive-demo.component.css',
})
export class DirectiveDemoComponent {
  condition: boolean = true;
  colors: string[] = ['red', 'blue', 'green'];
  selectedColor: string = 'red';
  option: string = 'option1';

  toggleCondition() {
    this.condition = !this.condition;
  }
}
