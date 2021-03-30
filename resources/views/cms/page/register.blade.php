<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="student_id" id="student_id" placeholder="NIM">
    <input type="text" name="email" id="email" placeholder="email">
    <select id="major" name="major">
        <option value="Informatika">Informatika</option>
        <option value="Film & Animasi">Film & Animasi</option>
        <option value="Strategic Communication">Strategic Communication</option>
        <option value="Akuntansi">Akuntansi</option>
    </select>
    <select id="generation" name="generation">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
    </select>
    <input type="text" name="instagram_account" id="instagram_account" placeholder="instagram_account">
    <input type="text" name="line_id" id="line_id" placeholder="line_id">
    <input type="text" name="phone_number" id="phone_number" placeholder="phone_number">
    <input type="password" name="password" id="password" placeholder="password">
    <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm_password">


    <button type="submit" class="btn btn-primary">Submit</button>
</form>