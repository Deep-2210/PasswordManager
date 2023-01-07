<div class="container">
  <div class="row" >
    <div class="col-sm-12 col-lg-8 col-md-12">
      <div class="mx-auto border_round1" style="background-color: white;">
        <h4 class="m-0 text-center pt-3 pb-2" style="font-size: 21px;">How to make a good Strong Password
        </h4>
      </div>
      <div class="d-flex mb-3 border_round2" style="background-color: white;">
        <!-- 1 Box -->
        <div class="p-3 flex-fill mb-3 list">
          <p><b>A Strong Password has:</b></p>
          <ul class="list-group">
            <li class="list-group-item">at least <b>15 characters</b></li>
            <li class="list-group-item"><b>uppercase letters</b></li>
            <li class="list-group-item"><b>lowercase letters</b></li>
            <li class="list-group-item"><b>numbers</b></li>
            <li class="list-group-item mb-5"><b>symbols,</b> such as <span style="color: #000f89">` ! ” ? $ ? % ^ & * ( ) _ – + = { [ } ] : ; @ ‘ ~ # | \ < , > . ? /</span></li>
          </ul>
        </div>
        <!-- 2 Box -->
        <div class="p-3 flex-fill mb-3 list">
          <p><b>A Strong Password is:</b></p>
          <ul class="list-group">
            <li class="list-group-item">not your <b>username</b></li>
            <li class="list-group-item">not your <b>name,</b> your <b>friend's name, </b>your <b>family member's name,</b> or a <b>common name</b></li>
            <li class="list-group-item">not your <b>date of birth</b></li>
            <li class="list-group-item">not a dictionary <b>word</b></li>
            <li class="list-group-item">not like your <b>previous passwords</b></li>
            <li class="list-group-item">not a <b>keyboard pattern,</b> such as <span style="color: #000f89">qwerty, asdfghjkl, or 12345678</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Secon Box -->
    <div class="col-sm-12 col-lg-4 col-md-12 border_round1 border_round2" style="background-color: white;">
      <div class="containerss">
        <h2 class="title text-center">Password Generator</h2>
        <div class="result">
          <div class="result__info right">click to copy</div>
          <div class="result__info left">copied</div>
          <div class="result__viewbox" id="result">CLICK GENERATE</div>
<form action="<?= site_url('dashboard_area/dashboard/add_new_form') ?>">
            <button id="copy-btn" style="--x: 0; --y: 0"><i class="far fa-copy"  onclick="return  confirm('Do You want to Save Your Password')"></i></button>

</form>
        </div>
        <div class="length range__slider" style="border: 1px solid #87cefa; background-color: #d6f0ff;" data-min="8" data-max="40">
          <div class="length__title field-title" data-length='0' >length:</div><br>
          <input id="slider" type="range" min="8" max="40" value="16" />
        </div>
        <div class="settings">
          <span class="settings__title field-title" style="padding-top: 18px;">settings</span><br>
          <div class="setting">
            <input type="checkbox" id="uppercase" checked />
            <label for="uppercase">Include Uppercase</label>
          </div>
          <div class="setting">
            <input type="checkbox" id="lowercase" checked />
            <label for="lowercase">Include Lowercase</label>
          </div>
          <div class="setting">
            <input type="checkbox" id="number" checked />
            <label for="number">Include Numbers</label>
          </div>
          <div class="setting">
            <input type="checkbox" id="symbol" checked />
            <label for="symbol">Include Symbols</label>
          </div>
        </div>
        <button class="btn generate" id="generate">Generate Password</button>
      </div>
      
    </div>
  </div>
</div>