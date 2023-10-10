<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
<!--
            <x-jet-authentication-card-logo />
-->
        </x-slot>
        <div>
            <img class="d-block mx-auto" width="200"  src="{{ asset('img//logo_login.png') }}">
        </div>
        <h2 class="text-xl text-gray-800 leading-tight mb-4 text-center mt-5">
            新規会員登録
        </h2>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/users/store">
            @csrf

            <div>
                氏名 <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                氏名カナ <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="name_kana" class="block mt-1 w-full" type="text" name="name_kana" :value="old('name_kana')" required autofocus autocomplete="name_kana" />
            </div>
            <div class="mt-4">
                電話番号 <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required />
            </div>
            <div class="mt-4">
                電話番号2
                <x-jet-input id="tel2" class="block mt-1 w-full" type="tel" name="tel2" :value="old('tel2')" />
            </div>
            <div class="mt-4">
                メールアドレス <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                メールアドレス2
                <x-jet-input id="email2" class="block mt-1 w-full" type="email" name="email2" :value="old('email2')" />
            </div>
            <div class="mt-4">
                性別
                <select class="block mt-1 w-1/2 border-gray-300 rounded" name="gender">
                    <option value="">選択してください</option>
                    <option value="0" @if(old('gender')=='0') selected @endif>回答しない</option>
                    <option value="1" @if(old('gender')=='1') selected @endif>男性</option>
                    <option value="2" @if(old('gender')=='2') selected @endif>女性</option>
                </select>
            </div>
            <div class="mt-4">
                生年月日
                <x-jet-input id="birth_day" class="block mt-1 w-1/2" type="date" name="birth_day" :value="old('birth_day')" />
            </div>
            <div class="mt-4">
                郵便番号 <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="postal_code" class="block mt-1 w-1/2" type="text" name="postal_code" :value="old('postal_code')" required />
            </div>
            <div class="mt-4">
                都道府県 <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <select class="block mt-1 w-1/2 border-gray-300 rounded" name="prefecture">
                    <option value="">選択してください</option>
                    <option value="北海道" @if(old('prefecture')=='北海道') selected @endif>北海道</option>
                    <option value="青森県" @if(old('prefecture')=='青森県') selected @endif>青森県</option>
                    <option value="岩手県" @if(old('prefecture')=='岩手県') selected @endif>岩手県</option>
                    <option value="宮城県" @if(old('prefecture')=='宮城県') selected @endif>宮城県</option>
                    <option value="秋田県" @if(old('prefecture')=='秋田県') selected @endif>秋田県</option>
                    <option value="山形県" @if(old('prefecture')=='山形県') selected @endif>山形県</option>
                    <option value="福島県" @if(old('prefecture')=='福島県') selected @endif>福島県</option>
                    <option value="茨城県" @if(old('prefecture')=='茨城県') selected @endif>茨城県</option>
                    <option value="栃木県" @if(old('prefecture')=='栃木県') selected @endif>栃木県</option>
                    <option value="群馬県" @if(old('prefecture')=='群馬県') selected @endif>群馬県</option>
                    <option value="埼玉県" @if(old('prefecture')=='埼玉県') selected @endif>埼玉県</option>
                    <option value="千葉県" @if(old('prefecture')=='千葉県') selected @endif>千葉県</option>
                    <option value="東京都" @if(old('prefecture')=='東京都') selected @endif>東京都</option>
                    <option value="神奈川県" @if(old('prefecture')=='神奈川県') selected @endif>神奈川県</option>
                    <option value="新潟県" @if(old('prefecture')=='新潟県') selected @endif>新潟県</option>
                    <option value="富山県" @if(old('prefecture')=='富山県') selected @endif>富山県</option>
                    <option value="石川県" @if(old('prefecture')=='石川県') selected @endif>石川県</option>
                    <option value="福井県" @if(old('prefecture')=='福井県') selected @endif>福井県</option>
                    <option value="山梨県" @if(old('prefecture')=='山梨県') selected @endif>山梨県</option>
                    <option value="長野県" @if(old('prefecture')=='長野県') selected @endif>長野県</option>
                    <option value="岐阜県" @if(old('prefecture')=='岐阜県') selected @endif>岐阜県</option>
                    <option value="静岡県" @if(old('prefecture')=='静岡県') selected @endif>静岡県</option>
                    <option value="愛知県" @if(old('prefecture')=='愛知県') selected @endif>愛知県</option>
                    <option value="三重県" @if(old('prefecture')=='三重県') selected @endif>三重県</option>
                    <option value="滋賀県" @if(old('prefecture')=='滋賀県') selected @endif>滋賀県</option>
                    <option value="京都府" @if(old('prefecture')=='京都府') selected @endif>京都府</option>
                    <option value="大阪府" @if(old('prefecture')=='大阪府') selected @endif>大阪府</option>
                    <option value="兵庫県" @if(old('prefecture')=='兵庫県') selected @endif>兵庫県</option>
                    <option value="奈良県" @if(old('prefecture')=='奈良県') selected @endif>奈良県</option>
                    <option value="和歌山県" @if(old('prefecture')=='和歌山県') selected @endif>和歌山県</option>
                    <option value="鳥取県" @if(old('prefecture')=='鳥取県') selected @endif>鳥取県</option>
                    <option value="島根県" @if(old('prefecture')=='島根県') selected @endif>島根県</option>
                    <option value="岡山県" @if(old('prefecture')=='岡山県') selected @endif>岡山県</option>
                    <option value="広島県" @if(old('prefecture')=='広島県') selected @endif>広島県</option>
                    <option value="山口県" @if(old('prefecture')=='山口県') selected @endif>山口県</option>
                    <option value="徳島県" @if(old('prefecture')=='徳島県') selected @endif>徳島県</option>
                    <option value="香川県" @if(old('prefecture')=='香川県') selected @endif>香川県</option>
                    <option value="愛媛県" @if(old('prefecture')=='愛媛県') selected @endif>愛媛県</option>
                    <option value="高知県" @if(old('prefecture')=='高知県') selected @endif>高知県</option>
                    <option value="福岡県" @if(old('prefecture')=='福岡県') selected @endif>福岡県</option>
                    <option value="佐賀県" @if(old('prefecture')=='佐賀県') selected @endif>佐賀県</option>
                    <option value="長崎県" @if(old('prefecture')=='長崎県') selected @endif>長崎県</option>
                    <option value="熊本県" @if(old('prefecture')=='熊本県') selected @endif>熊本県</option>
                    <option value="大分県" @if(old('prefecture')=='大分県') selected @endif>大分県</option>
                    <option value="宮崎県" @if(old('prefecture')=='宮崎県') selected @endif>宮崎県</option>
                    <option value="鹿児島県" @if(old('prefecture')=='鹿児島県') selected @endif>鹿児島県</option>
                    <option value="沖縄県" @if(old('prefecture')=='沖縄県') selected @endif>沖縄県</option>
                </select>
            </div>
            <div class="mt-4">
                住所 <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>
            <div class="mt-4">
                パスワード <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" required />
            </div>

            <div class="mt-4">
                パスワード（確認用） <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-red-600 rounded">必須</span>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
