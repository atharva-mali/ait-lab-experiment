import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-my-component',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './my-component.component.html',
  styleUrl: './my-component.component.css',
})
export class MyComponentComponent {
  buttonClicked: boolean = false;

  handleClick() {
    this.buttonClicked = true;
  }
}
