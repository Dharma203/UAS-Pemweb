# UAS-Pemweb

## Bagian 1: Client-side Programming

### 1.1 Manipulasi DOM dengan JavaScript

#### 1.1.1 Form Input dengan 4 Elemen
Pada bagian ini, kami membuat form input dengan minimal 4 elemen input, yaitu `text`, `checkbox`, dan `radio`. Berikut adalah contoh HTML form:

<form id="myForm">
  <input type="text" id="name" name="name" placeholder="Nama" required>
  <input type="email" id="email" name="email" placeholder="Email" required>
  <input type="password" id="password" name="password" placeholder="Password" required>
  
  <label>
    <input type="radio" name="gender" value="Male" required> Male
  </label>
  <label>
    <input type="radio" name="gender" value="Female" required> Female
  </label>
  
  <label>
    <input type="checkbox" name="cookie_consent" id="agree" required> Saya setuju dengan penggunaan cookie.
  </label>
  
  <button type="submit">Submit</button>
</form>
