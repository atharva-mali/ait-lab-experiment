import { Directive, ElementRef } from '@angular/core';

@Directive({
  selector: '[appMyAttributeDirective]',
  standalone: true,
})
export class MyAttributeDirectiveDirective {
  constructor(private el: ElementRef) {
    el.nativeElement.style.backgroundColor = 'yellow';
  }
}
