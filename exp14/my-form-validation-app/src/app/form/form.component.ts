import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';

@Component({
  selector: 'app-form',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css'], // Note the correction here, should be 'styleUrls'
})
export class FormComponent implements OnInit {
  form: FormGroup;

  constructor() {
    this.form = new FormGroup({
      name: new FormControl('', Validators.required),
      email: new FormControl('', [Validators.required, Validators.email]),
      age: new FormControl('', Validators.required),
    });
  }

  ngOnInit(): void {
    // Log the initial form validation status
    console.log('Form Valid:', this.form.valid);

    // Log each control's validation status
    for (const controlName in this.form.controls) {
      if (this.form.controls.hasOwnProperty(controlName)) {
        const control = this.form.get(controlName);
        console.log(`${controlName} Valid:`, control?.valid);
      }
    }
  }

  onSubmit(): void {
    if (this.form.valid) {
      console.log('Form Submitted', this.form.value);
    } else {
      console.log('Form is invalid');
    }
  }
}
