<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form1</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bs/js/bootstrap.min.js') }}">
    <style>
        textarea {
            resize: none;
        }
    </style>
</head>
<body>

    {{-- @dump($errors) --}}
    {{-- @dump($errors->any()) return true of false --}}
    {{-- $errors->all()  return all errors --}}

    
    {{-- @if($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif --}}
    <h1>Form Validation</h1>

    <form class="p-2" action="{{ route('forms.form3_data') }}" method="POST">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- {{ csrf_field() }} --}}
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="exampleInputname1" aria-describedby="nameHelp">
            @error('name')
            <div id="nameHelp" class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="{{ old('email') }}" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
            <div id="emailHelp" class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="examlabelleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="exampleInputPassword1">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Confirm</label>
            <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="exampleInputPassword1">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember-me" name="remmember-me" value="ture" {{ old('remmember-me') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember-me">Remember me</label>
        </div>
        <div class="form-check">
            <p class="fs-5">#Gender</p>
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
            <label class="form-check-label" for="male">
              Male
            </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
              <label class="form-check-label" for="female">
                  Female
              </label>
          </div>
          <div class="form-check form-check-">
            <p class="fs-5">#intersting</p>
            {{-- is_array() his check is at a array or not / in_array('value',$array) check if the value in the array or not --}}
            <input class="form-check-input" name="intersting[]" type="checkbox" id="Football" value="Football" {{ is_array(old('intersting')) && in_array('Football', old('intersting')) ? 'checked' : '' }}>
            <label class="form-check-label" for="Football">Football</label>
          </div>
          <div class="form-check form-check-">
            <input class="form-check-input" name="intersting[]" type="checkbox" id="Drow" value="Drow" {{ is_array(old('intersting')) && in_array('Drow', old('intersting')) ? 'checked' : '' }}>
            <label class="form-check-label" for="Drow">Drow</label>
          </div>
          <div class="form-check form-check-">
            <input class="form-check-input" name="intersting[]" type="checkbox" id="Swim" value="Swim" {{ is_array(old('intersting')) && in_array('Swim', old('intersting')) ? 'checked' : '' }}>
            <label class="form-check-label" for="Swim">Swim</label>
          </div>
          <select name="nationality" id="nationality" class="form-select" aria-label="select example">
            <option value="">-- select one --</option>
            <option value="afghan">Afghan</option>
            <option value="albanian">Albanian</option>
            <option value="algerian">Algerian</option>
            <option value="american">American</option>
            <option value="andorran">Andorran</option>
            <option value="angolan">Angolan</option>
            <option value="antiguans">Antiguans</option>
            <option value="argentinean">Argentinean</option>
            <option value="armenian">Armenian</option>
            <option value="australian">Australian</option>
            <option value="austrian">Austrian</option>
            <option value="azerbaijani">Azerbaijani</option>
            <option value="bahamian">Bahamian</option>
            <option value="bahraini">Bahraini</option>
            <option value="bangladeshi">Bangladeshi</option>
            <option value="barbadian">Barbadian</option>
            <option value="barbudans">Barbudans</option>
            <option value="batswana">Batswana</option>
            <option value="belarusian">Belarusian</option>
            <option value="belgian">Belgian</option>
            <option value="belizean">Belizean</option>
            <option value="beninese">Beninese</option>
            <option value="bhutanese">Bhutanese</option>
            <option value="bolivian">Bolivian</option>
            <option value="bosnian">Bosnian</option>
            <option value="brazilian">Brazilian</option>
            <option value="british">British</option>
            <option value="bruneian">Bruneian</option>
            <option value="bulgarian">Bulgarian</option>
            <option value="burkinabe">Burkinabe</option>
            <option value="burmese">Burmese</option>
            <option value="burundian">Burundian</option>
            <option value="cambodian">Cambodian</option>
            <option value="cameroonian">Cameroonian</option>
            <option value="canadian">Canadian</option>
            <option value="cape verdean">Cape Verdean</option>
            <option value="central african">Central African</option>
            <option value="chadian">Chadian</option>
            <option value="chilean">Chilean</option>
            <option value="chinese">Chinese</option>
            <option value="colombian">Colombian</option>
            <option value="comoran">Comoran</option>
            <option value="congolese">Congolese</option>
            <option value="costa rican">Costa Rican</option>
            <option value="croatian">Croatian</option>
            <option value="cuban">Cuban</option>
            <option value="cypriot">Cypriot</option>
            <option value="czech">Czech</option>
            <option value="danish">Danish</option>
            <option value="djibouti">Djibouti</option>
            <option value="dominican">Dominican</option>
            <option value="dutch">Dutch</option>
            <option value="east timorese">East Timorese</option>
            <option value="ecuadorean">Ecuadorean</option>
            <option value="egyptian">Egyptian</option>
            <option value="emirian">Emirian</option>
            <option value="equatorial guinean">Equatorial Guinean</option>
            <option value="eritrean">Eritrean</option>
            <option value="estonian">Estonian</option>
            <option value="ethiopian">Ethiopian</option>
            <option value="fijian">Fijian</option>
            <option value="filipino">Filipino</option>
            <option value="finnish">Finnish</option>
            <option value="french">French</option>
            <option value="gabonese">Gabonese</option>
            <option value="gambian">Gambian</option>
            <option value="georgian">Georgian</option>
            <option value="german">German</option>
            <option value="ghanaian">Ghanaian</option>
            <option value="greek">Greek</option>
            <option value="grenadian">Grenadian</option>
            <option value="guatemalan">Guatemalan</option>
            <option value="guinea-bissauan">Guinea-Bissauan</option>
            <option value="guinean">Guinean</option>
            <option value="guyanese">Guyanese</option>
            <option value="haitian">Haitian</option>
            <option value="herzegovinian">Herzegovinian</option>
            <option value="honduran">Honduran</option>
            <option value="hungarian">Hungarian</option>
            <option value="icelander">Icelander</option>
            <option value="indian">Indian</option>
            <option value="indonesian">Indonesian</option>
            <option value="iranian">Iranian</option>
            <option value="iraqi">Iraqi</option>
            <option value="irish">Irish</option>
            <option value="israeli">Israeli</option>
            <option value="italian">Italian</option>
            <option value="ivorian">Ivorian</option>
            <option value="jamaican">Jamaican</option>
            <option value="japanese">Japanese</option>
            <option value="jordanian">Jordanian</option>
            <option value="kazakhstani">Kazakhstani</option>
            <option value="kenyan">Kenyan</option>
            <option value="kittian and nevisian">Kittian and Nevisian</option>
            <option value="kuwaiti">Kuwaiti</option>
            <option value="kyrgyz">Kyrgyz</option>
            <option value="laotian">Laotian</option>
            <option value="latvian">Latvian</option>
            <option value="lebanese">Lebanese</option>
            <option value="liberian">Liberian</option>
            <option value="libyan">Libyan</option>
            <option value="liechtensteiner">Liechtensteiner</option>
            <option value="lithuanian">Lithuanian</option>
            <option value="luxembourger">Luxembourger</option>
            <option value="macedonian">Macedonian</option>
            <option value="malagasy">Malagasy</option>
            <option value="malawian">Malawian</option>
            <option value="malaysian">Malaysian</option>
            <option value="maldivan">Maldivan</option>
            <option value="malian">Malian</option>
            <option value="maltese">Maltese</option>
            <option value="marshallese">Marshallese</option>
            <option value="mauritanian">Mauritanian</option>
            <option value="mauritian">Mauritian</option>
            <option value="mexican">Mexican</option>
            <option value="micronesian">Micronesian</option>
            <option value="moldovan">Moldovan</option>
            <option value="monacan">Monacan</option>
            <option value="mongolian">Mongolian</option>
            <option value="moroccan">Moroccan</option>
            <option value="mosotho">Mosotho</option>
            <option value="motswana">Motswana</option>
            <option value="mozambican">Mozambican</option>
            <option value="namibian">Namibian</option>
            <option value="nauruan">Nauruan</option>
            <option value="nepalese">Nepalese</option>
            <option value="new zealander">New Zealander</option>
            <option value="ni-vanuatu">Ni-Vanuatu</option>
            <option value="nicaraguan">Nicaraguan</option>
            <option value="nigerien">Nigerien</option>
            <option value="north korean">North Korean</option>
            <option value="northern irish">Northern Irish</option>
            <option value="norwegian">Norwegian</option>
            <option value="omani">Omani</option>
            <option value="pakistani">Pakistani</option>
            <option value="palauan">Palauan</option>
            <option value="panamanian">Panamanian</option>
            <option value="papua new guinean">Papua New Guinean</option>
            <option value="paraguayan">Paraguayan</option>
            <option value="peruvian">Peruvian</option>
            <option value="polish">Polish</option>
            <option value="portuguese">Portuguese</option>
            <option value="qatari">Qatari</option>
            <option value="romanian">Romanian</option>
            <option value="russian">Russian</option>
            <option value="rwandan">Rwandan</option>
            <option value="saint lucian">Saint Lucian</option>
            <option value="salvadoran">Salvadoran</option>
            <option value="samoan">Samoan</option>
            <option value="san marinese">San Marinese</option>
            <option value="sao tomean">Sao Tomean</option>
            <option value="saudi">Saudi</option>
            <option value="scottish">Scottish</option>
            <option value="senegalese">Senegalese</option>
            <option value="serbian">Serbian</option>
            <option value="seychellois">Seychellois</option>
            <option value="sierra leonean">Sierra Leonean</option>
            <option value="singaporean">Singaporean</option>
            <option value="slovakian">Slovakian</option>
            <option value="slovenian">Slovenian</option>
            <option value="solomon islander">Solomon Islander</option>
            <option value="somali">Somali</option>
            <option value="south african">South African</option>
            <option value="south korean">South Korean</option>
            <option value="spanish">Spanish</option>
            <option value="sri lankan">Sri Lankan</option>
            <option value="sudanese">Sudanese</option>
            <option value="surinamer">Surinamer</option>
            <option value="swazi">Swazi</option>
            <option value="swedish">Swedish</option>
            <option value="swiss">Swiss</option>
            <option value="syrian">Syrian</option>
            <option value="taiwanese">Taiwanese</option>
            <option value="tajik">Tajik</option>
            <option value="tanzanian">Tanzanian</option>
            <option value="thai">Thai</option>
            <option value="togolese">Togolese</option>
            <option value="tongan">Tongan</option>
            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
            <option value="tunisian">Tunisian</option>
            <option value="turkish">Turkish</option>
            <option value="tuvaluan">Tuvaluan</option>
            <option value="ugandan">Ugandan</option>
            <option value="ukrainian">Ukrainian</option>
            <option value="uruguayan">Uruguayan</option>
            <option value="uzbekistani">Uzbekistani</option>
            <option value="venezuelan">Venezuelan</option>
            <option value="vietnamese">Vietnamese</option>
            <option value="welsh">Welsh</option>
            <option value="yemenite">Yemenite</option>
            <option value="zambian">Zambian</option>
            <option value="zimbabwean">Zimbabwean</option>
          </select>
          <label for="description">Description</label>
          <textarea class="form-control" name="description" placeholder="Leave a description here" id="description" rows="5" {{ $errors->has('description') ? 'in-valid' : '' }}>{{ old('description') }}</textarea>
          @error('description')
            <div class="text-danger">{{ $message }}</div>
          @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        let nationality = document.getElementById('nationality');
        nationality.value = `{{ old('nationality') }}`
    </script>
</body>
</html>