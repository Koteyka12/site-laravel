{{-- Anfrage senden --}}

{{-- Mobile Version --}}
<section class="md:hidden pt-[30px] pb-[30px]" x-data="{ formOpen: false, activeTab: 'kunde' }">
    <div 
        class="bg-white rounded-[25px] p-[20px] transition-colors"
        :class="formOpen ? '' : 'border-2 border-[#8BE567]'"
    >
        {{-- Collapsed Card --}}
        <div x-show="!formOpen" class="cursor-pointer" @click="formOpen = true">
            <div class="flex items-start gap-[15px]">
                {{-- Phone Icon --}}
                <div class="w-[24px] h-[24px] shrink-0">
                    <svg class="w-[24px] h-[24px] text-[#8BE567]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-[18px] leading-[22px] text-black mb-[5px]">Anfrage senden</h3>
                    <p class="font-normal text-[14px] leading-[18px] text-[#8B8B8B]">Hinterlassen Sie Ihre Kontaktdaten und wir rufen Sie in Kürze zurück</p>
                </div>
            </div>
            <button type="button" class="w-full h-[44px] mt-[15px] bg-[#8BE567] rounded-[10px] font-semibold text-[16px] text-white">
                Kontakt
            </button>
        </div>

        {{-- Expanded Form --}}
        <div x-show="formOpen" x-collapse>
            {{-- Header with close --}}
            <div class="flex items-center justify-between mb-[20px]">
                <h3 class="font-semibold text-[18px] leading-[22px] text-black">Anfrage senden</h3>
                <button type="button" @click="formOpen = false" class="text-[#8B8B8B]">
                    <svg class="w-[24px] h-[24px]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Tabs --}}
            <div class="flex gap-[10px] mb-[20px]">
                <button
                    type="button"
                    @click="activeTab = 'kunde'"
                    :class="activeTab === 'kunde' ? 'border-[#64CEED]' : 'border-transparent'"
                    class="px-[20px] py-[10px] rounded-full border-2 font-medium text-[14px] transition-colors"
                >
                    Kunde
                </button>
                <button
                    type="button"
                    @click="activeTab = 'bewerber'"
                    :class="activeTab === 'bewerber' ? 'border-[#64CEED]' : 'border-transparent'"
                    class="px-[20px] py-[10px] rounded-full border-2 font-medium text-[14px] transition-colors"
                >
                    Bewerber
                </button>
            </div>

            {{-- Mobile Form --}}
            <form
                action="#"
                method="POST"
                x-data="{
                    agreed: false,
                    submitted: false,
                    fields: {
                        stadt: '',
                        vorname: '',
                        telefon: '',
                        leistung: '',
                        nachname: '',
                        email: ''
                    },
                    errors: {
                        stadt: false,
                        vorname: false,
                        telefon: false,
                        leistung: false,
                        nachname: false,
                        email: false,
                        agreed: false
                    },
                    validateEmail(email) {
                        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                    },
                    validatePhone(phone) {
                        return /^[\d\s\+\-\(\)]{6,}$/.test(phone);
                    },
                    validate() {
                        this.errors.stadt = !this.fields.stadt;
                        this.errors.vorname = !this.fields.vorname.trim();
                        this.errors.telefon = !this.validatePhone(this.fields.telefon);
                        this.errors.leistung = !this.fields.leistung;
                        this.errors.nachname = !this.fields.nachname.trim();
                        this.errors.email = !this.validateEmail(this.fields.email);
                        this.errors.agreed = !this.agreed;
                        return !Object.values(this.errors).some(e => e);
                    },
                    submitForm() {
                        this.submitted = true;
                        if (this.validate()) {
                            this.$el.submit();
                        }
                    }
                }"
                @submit.prevent="submitForm()"
                novalidate
            >
                @csrf

                {{-- Stadt wählen --}}
                <div class="relative mb-[15px]">
                    <select
                        name="stadt"
                        x-model="fields.stadt"
                        class="peer w-full h-[50px] px-[16px] pt-[14px] border rounded-[10px] font-normal text-[16px] text-black appearance-none bg-white focus:outline-none transition-colors"
                        :class="submitted && errors.stadt ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                    >
                        <option value=""></option>
                        <option value="frankfurt">Frankfurt</option>
                        <option value="offenbach">Offenbach</option>
                        <option value="darmstadt">Darmstadt</option>
                        <option value="bad-homburg">Bad Homburg</option>
                        <option value="bad-vilbel">Bad Vilbel</option>
                        <option value="oberursel">Oberursel</option>
                        <option value="maintal">Maintal</option>
                        <option value="hanau">Hanau</option>
                    </select>
                    <label
                        class="absolute left-[12px] px-[4px] bg-white font-normal transition-all duration-200 pointer-events-none"
                        :class="[
                            fields.stadt ? '-top-[8px] text-[12px]' : 'top-1/2 -translate-y-1/2 text-[16px]',
                            submitted && errors.stadt ? 'text-red-400' : 'text-[#8B8B8B]'
                        ]"
                    >
                        Stadt wählen*
                    </label>
                    <svg class="absolute right-[16px] top-1/2 -translate-y-1/2 w-[12px] h-[8px] pointer-events-none" fill="none" stroke="#8B8B8B" viewBox="0 0 12 8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l5 5 5-5"/>
                    </svg>
                </div>

                {{-- Leistungen --}}
                <div class="relative mb-[15px]">
                    <select
                        name="leistung"
                        x-model="fields.leistung"
                        class="peer w-full h-[50px] px-[16px] pt-[14px] border rounded-[10px] font-normal text-[16px] text-black appearance-none bg-white focus:outline-none transition-colors"
                        :class="submitted && errors.leistung ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                    >
                        <option value=""></option>
                        <option value="grundpflege">Grundpflege</option>
                        <option value="behandlungspflege">Behandlungspflege</option>
                        <option value="haushaltshilfe">Haushaltshilfe</option>
                    </select>
                    <label
                        class="absolute left-[12px] px-[4px] bg-white font-normal transition-all duration-200 pointer-events-none"
                        :class="[
                            fields.leistung ? '-top-[8px] text-[12px]' : 'top-1/2 -translate-y-1/2 text-[16px]',
                            submitted && errors.leistung ? 'text-red-400' : 'text-[#8B8B8B]'
                        ]"
                    >
                        Leistungen *
                    </label>
                    <svg class="absolute right-[16px] top-1/2 -translate-y-1/2 w-[12px] h-[8px] pointer-events-none" fill="none" stroke="#8B8B8B" viewBox="0 0 12 8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l5 5 5-5"/>
                    </svg>
                </div>

                {{-- Vorname --}}
                <div class="relative mb-[15px]">
                    <input
                        type="text"
                        name="vorname"
                        x-model="fields.vorname"
                        placeholder=" "
                        class="peer w-full h-[50px] px-[16px] pt-[6px] border rounded-[10px] font-normal text-[16px] text-black focus:outline-none transition-colors"
                        :class="submitted && errors.vorname ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                    >
                    <label
                        class="absolute left-[12px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[16px] transition-all duration-200 pointer-events-none peer-focus:-top-[8px] peer-focus:text-[12px] peer-focus:translate-y-0 peer-[:not(:placeholder-shown)]:-top-[8px] peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:translate-y-0"
                        :class="submitted && errors.vorname ? 'text-red-400' : 'text-[#8B8B8B]'"
                    >
                        Ihr Vorname *
                    </label>
                </div>

                {{-- Nachname --}}
                <div class="relative mb-[15px]">
                    <input
                        type="text"
                        name="nachname"
                        x-model="fields.nachname"
                        placeholder=" "
                        class="peer w-full h-[50px] px-[16px] pt-[6px] border rounded-[10px] font-normal text-[16px] text-black focus:outline-none transition-colors"
                        :class="submitted && errors.nachname ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                    >
                    <label
                        class="absolute left-[12px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[16px] transition-all duration-200 pointer-events-none peer-focus:-top-[8px] peer-focus:text-[12px] peer-focus:translate-y-0 peer-[:not(:placeholder-shown)]:-top-[8px] peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:translate-y-0"
                        :class="submitted && errors.nachname ? 'text-red-400' : 'text-[#8B8B8B]'"
                    >
                        Ihr Nachname *
                    </label>
                </div>

                {{-- Telefon --}}
                <div class="relative mb-[15px]">
                    <input
                        type="tel"
                        name="telefon"
                        x-model="fields.telefon"
                        placeholder=" "
                        class="peer w-full h-[50px] px-[16px] pt-[6px] border rounded-[10px] font-normal text-[16px] text-black focus:outline-none transition-colors"
                        :class="submitted && errors.telefon ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                    >
                    <label
                        class="absolute left-[12px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[16px] transition-all duration-200 pointer-events-none peer-focus:-top-[8px] peer-focus:text-[12px] peer-focus:translate-y-0 peer-[:not(:placeholder-shown)]:-top-[8px] peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:translate-y-0"
                        :class="submitted && errors.telefon ? 'text-red-400' : 'text-[#8B8B8B]'"
                    >
                        Telefon *
                    </label>
                </div>

                {{-- Email --}}
                <div class="relative mb-[15px]">
                    <input
                        type="email"
                        name="email"
                        x-model="fields.email"
                        placeholder=" "
                        class="peer w-full h-[50px] px-[16px] pt-[6px] border rounded-[10px] font-normal text-[16px] text-black focus:outline-none transition-colors"
                        :class="submitted && errors.email ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                    >
                    <label
                        class="absolute left-[12px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[16px] transition-all duration-200 pointer-events-none peer-focus:-top-[8px] peer-focus:text-[12px] peer-focus:translate-y-0 peer-[:not(:placeholder-shown)]:-top-[8px] peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:translate-y-0"
                        :class="submitted && errors.email ? 'text-red-400' : 'text-[#8B8B8B]'"
                    >
                        e-mail *
                    </label>
                </div>

                {{-- Nachricht --}}
                <div class="relative mb-[15px]">
                    <textarea
                        name="nachricht"
                        placeholder=" "
                        rows="3"
                        class="peer w-full px-[16px] pt-[20px] pb-[12px] border border-[#E8E8E8] rounded-[10px] font-normal text-[16px] text-black focus:outline-none focus:border-[#64CEED] resize-none"
                    ></textarea>
                    <label class="absolute left-[12px] top-[16px] px-[4px] bg-white font-normal text-[16px] text-[#8B8B8B] transition-all duration-200 pointer-events-none peer-focus:-top-[8px] peer-focus:text-[12px] peer-[:not(:placeholder-shown)]:-top-[8px] peer-[:not(:placeholder-shown)]:text-[12px]">
                        Ihre Nachricht
                    </label>
                </div>

                {{-- Checkbox --}}
                <div class="mb-[20px]">
                    <label class="flex items-start gap-[10px] cursor-pointer">
                        <div class="relative shrink-0 mt-[2px]">
                            <input
                                type="checkbox"
                                name="datenschutz"
                                x-model="agreed"
                                class="sr-only"
                            >
                            <div
                                class="w-[20px] h-[20px] rounded-[4px] border-2 flex items-center justify-center transition-colors"
                                :class="agreed ? 'bg-[#64CEED] border-[#64CEED]' : (submitted && errors.agreed ? 'bg-white border-red-400' : 'bg-white border-[#E8E8E8]')"
                            >
                                <svg
                                    x-show="agreed"
                                    class="w-[12px] h-[12px] text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                        </div>
                        <span
                            class="font-normal text-[14px] leading-[18px]"
                            :class="submitted && errors.agreed ? 'text-red-400' : 'text-black'"
                        >
                            Ja, ich stimme der <a href="/datenschutz" class="text-[#64CEED]">Datenschutzerklärung</a> der Pflegegruppe
                        </span>
                    </label>
                </div>

                {{-- Submit Button --}}
                <button
                    type="submit"
                    class="w-full h-[50px] rounded-[10px] font-semibold text-[16px] transition-colors cursor-pointer"
                    :class="agreed ? 'bg-[#64CEED] text-white' : 'bg-[#E8E8E8] text-white disabled:cursor-not-allowed'"
                    :disabled="!agreed"
                >
                    Senden
                </button>
            </form>
        </div>
    </div>
</section>

{{-- Desktop Version --}}
<section class="hidden md:block pt-[70px] pb-[30px]">
    <div class="rounded-[25px] p-[30px] bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/form-background.png') }}')">
        {{-- Section Title --}}
        <h2 class="font-bold text-[40px] leading-[40px] text-white mb-[30px]">
            Anfrage senden
        </h2>

        {{-- Form Container --}}
        <div class="bg-white rounded-[25px] p-[24px]" x-data="{ activeTab: 'kunde' }">
            {{-- Tabs --}}
            <div class="flex gap-[10px] mb-[30px]">
                <button
                    type="button"
                    @click="activeTab = 'kunde'"
                    :class="activeTab === 'kunde' ? 'border-[#64CEED]' : 'border-transparent'"
                    class="px-[24px] py-[12px] rounded-full border-2 font-medium text-[16px] transition-colors"
                >
                    Kunde
                </button>
                <button
                    type="button"
                    @click="activeTab = 'bewerber'"
                    :class="activeTab === 'bewerber' ? 'border-[#64CEED]' : 'border-transparent'"
                    class="px-[24px] py-[12px] rounded-full border-2 font-medium text-[16px] transition-colors"
                >
                    Bewerber
                </button>
            </div>

            {{-- Form --}}
            <form
                action="#"
                method="POST"
                x-data="{
                    agreed: false,
                    submitted: false,
                    fields: {
                        stadt: '',
                        vorname: '',
                        telefon: '',
                        leistung: '',
                        nachname: '',
                        email: ''
                    },
                    errors: {
                        stadt: false,
                        vorname: false,
                        telefon: false,
                        leistung: false,
                        nachname: false,
                        email: false,
                        agreed: false
                    },
                    validateEmail(email) {
                        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                    },
                    validatePhone(phone) {
                        return /^[\d\s\+\-\(\)]{6,}$/.test(phone);
                    },
                    validate() {
                        this.errors.stadt = !this.fields.stadt;
                        this.errors.vorname = !this.fields.vorname.trim();
                        this.errors.telefon = !this.validatePhone(this.fields.telefon);
                        this.errors.leistung = !this.fields.leistung;
                        this.errors.nachname = !this.fields.nachname.trim();
                        this.errors.email = !this.validateEmail(this.fields.email);
                        this.errors.agreed = !this.agreed;
                        return !Object.values(this.errors).some(e => e);
                    },
                    submitForm() {
                        this.submitted = true;
                        if (this.validate()) {
                            this.$el.submit();
                        }
                    }
                }"
                @submit.prevent="submitForm()"
                novalidate
            >
                @csrf

                {{-- Row 1 --}}
                <div class="grid grid-cols-3 gap-[20px] mb-[20px]">
                    {{-- Stadt wählen --}}
                    <div class="relative">
                        <select
                            name="stadt"
                            x-model="fields.stadt"
                            class="peer w-full h-[56px] px-[20px] pt-[8px] border rounded-[10px] font-normal text-[18px] text-black appearance-none bg-white focus:outline-none transition-colors"
                            :class="submitted && errors.stadt ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                        >
                            <option value=""></option>
                            <option value="frankfurt">Frankfurt</option>
                            <option value="offenbach">Offenbach</option>
                            <option value="darmstadt">Darmstadt</option>
                            <option value="bad-homburg">Bad Homburg</option>
                            <option value="bad-vilbel">Bad Vilbel</option>
                            <option value="oberursel">Oberursel</option>
                            <option value="maintal">Maintal</option>
                            <option value="hanau">Hanau</option>
                        </select>
                        <label
                            class="absolute left-[16px] px-[4px] bg-white font-normal text-[18px] transition-all duration-200 pointer-events-none"
                            :class="[
                                fields.stadt ? 'top-0 text-[16px]' : 'top-1/2 -translate-y-1/2',
                                submitted && errors.stadt ? 'text-red-400' : 'text-[#8B8B8B]'
                            ]"
                        >
                            Stadt wählen*
                        </label>
                        <svg class="absolute right-[20px] top-1/2 -translate-y-1/2 w-[12px] h-[8px] pointer-events-none" fill="none" stroke="#8B8B8B" viewBox="0 0 12 8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l5 5 5-5"/>
                        </svg>
                    </div>

                    {{-- Vorname --}}
                    <div class="relative">
                        <input
                            type="text"
                            name="vorname"
                            x-model="fields.vorname"
                            placeholder=" "
                            class="peer w-full h-[56px] px-[20px] pt-[8px] border rounded-[10px] font-normal text-[18px] text-black focus:outline-none transition-colors"
                            :class="submitted && errors.vorname ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                        >
                        <label
                            class="absolute left-[16px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[18px] transition-all duration-200 pointer-events-none peer-focus:top-0 peer-focus:text-[16px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:text-[16px]"
                            :class="submitted && errors.vorname ? 'text-red-400' : 'text-[#8B8B8B]'"
                        >
                            Ihr Vorname *
                        </label>
                    </div>

                    {{-- Telefon --}}
                    <div class="relative">
                        <input
                            type="tel"
                            name="telefon"
                            x-model="fields.telefon"
                            placeholder=" "
                            class="peer w-full h-[56px] px-[20px] pt-[8px] border rounded-[10px] font-normal text-[18px] text-black focus:outline-none transition-colors"
                            :class="submitted && errors.telefon ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                        >
                        <label
                            class="absolute left-[16px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[18px] transition-all duration-200 pointer-events-none peer-focus:top-0 peer-focus:text-[16px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:text-[16px]"
                            :class="submitted && errors.telefon ? 'text-red-400' : 'text-[#8B8B8B]'"
                        >
                            Telefon*
                        </label>
                    </div>
                </div>

                {{-- Row 2 --}}
                <div class="grid grid-cols-3 gap-[20px] mb-[20px]">
                    {{-- Leistung wählen --}}
                    <div class="relative">
                        <select
                            name="leistung"
                            x-model="fields.leistung"
                            class="peer w-full h-[56px] px-[20px] pt-[8px] border rounded-[10px] font-normal text-[18px] text-black appearance-none bg-white focus:outline-none transition-colors"
                            :class="submitted && errors.leistung ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                        >
                            <option value=""></option>
                            <option value="grundpflege">Grundpflege</option>
                            <option value="behandlungspflege">Behandlungspflege</option>
                            <option value="haushaltshilfe">Haushaltshilfe</option>
                        </select>
                        <label
                            class="absolute left-[16px] px-[4px] bg-white font-normal text-[18px] transition-all duration-200 pointer-events-none"
                            :class="[
                                fields.leistung ? 'top-0 text-[16px]' : 'top-1/2 -translate-y-1/2',
                                submitted && errors.leistung ? 'text-red-400' : 'text-[#8B8B8B]'
                            ]"
                        >
                            Leistung wählen*
                        </label>
                        <svg class="absolute right-[20px] top-1/2 -translate-y-1/2 w-[12px] h-[8px] pointer-events-none" fill="none" stroke="#8B8B8B" viewBox="0 0 12 8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l5 5 5-5"/>
                        </svg>
                    </div>

                    {{-- Nachname --}}
                    <div class="relative">
                        <input
                            type="text"
                            name="nachname"
                            x-model="fields.nachname"
                            placeholder=" "
                            class="peer w-full h-[56px] px-[20px] pt-[8px] border rounded-[10px] font-normal text-[18px] text-black focus:outline-none transition-colors"
                            :class="submitted && errors.nachname ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                        >
                        <label
                            class="absolute left-[16px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[18px] transition-all duration-200 pointer-events-none peer-focus:top-0 peer-focus:text-[16px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:text-[16px]"
                            :class="submitted && errors.nachname ? 'text-red-400' : 'text-[#8B8B8B]'"
                        >
                            Ihr Nachname *
                        </label>
                    </div>

                    {{-- Email --}}
                    <div class="relative">
                        <input
                            type="text"
                            name="email"
                            x-model="fields.email"
                            placeholder=" "
                            class="peer w-full h-[56px] px-[20px] pt-[8px] border rounded-[10px] font-normal text-[18px] text-black focus:outline-none transition-colors"
                            :class="submitted && errors.email ? 'border-red-400' : 'border-[#E8E8E8] focus:border-[#64CEED]'"
                        >
                        <label
                            class="absolute left-[16px] top-1/2 -translate-y-1/2 px-[4px] bg-white font-normal text-[18px] transition-all duration-200 pointer-events-none peer-focus:top-0 peer-focus:text-[16px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:text-[16px]"
                            :class="submitted && errors.email ? 'text-red-400' : 'text-[#8B8B8B]'"
                        >
                            E-Mail *
                        </label>
                    </div>
                </div>

                {{-- Row 3: Message --}}
                <div class="mb-[20px] relative">
                    <textarea
                        name="nachricht"
                        placeholder=" "
                        rows="3"
                        class="peer w-full px-[20px] pt-[24px] pb-[16px] border border-[#E8E8E8] rounded-[10px] font-normal text-[18px] text-black focus:outline-none focus:border-[#64CEED] resize-none"
                    ></textarea>
                    <label class="absolute left-[16px] top-[20px] px-[4px] bg-white font-normal text-[18px] text-[#8B8B8B] transition-all duration-200 pointer-events-none peer-focus:top-0 peer-focus:text-[16px] peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:text-[16px]">
                        Ihre Nachricht
                    </label>
                </div>

                {{-- Checkbox --}}
                <div class="mb-[20px]">
                    <label class="flex items-center gap-[12px] cursor-pointer">
                        <div class="relative">
                            <input
                                type="checkbox"
                                name="datenschutz"
                                x-model="agreed"
                                class="sr-only"
                            >
                            <div
                                class="w-[24px] h-[24px] rounded-[6px] border-2 flex items-center justify-center transition-colors"
                                :class="agreed ? 'bg-[#64CEED] border-[#64CEED]' : (submitted && errors.agreed ? 'bg-white border-red-400' : 'bg-white border-[#E8E8E8]')"
                            >
                                <svg
                                    x-show="agreed"
                                    class="w-[14px] h-[14px] text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                        </div>
                        <span
                            class="font-normal text-[18px]"
                            :class="submitted && errors.agreed ? 'text-red-400' : 'text-black'"
                        >
                            Ja, ich stimme der Datenschutzerklärung der Pflegegruppe
                        </span>
                    </label>
                </div>

                {{-- Submit Button --}}
                <button
                    type="submit"
                    class="h-[56px] px-[40px] bg-[#64CEED] rounded-[10px] font-semibold text-[18px] text-white hover:bg-[#50c4e0] transition-colors disabled:bg-[#E8E8E8] disabled:opacity-50 disabled:cursor-not-allowed cursor-pointer"
                    :disabled="!agreed"
                >
                    Senden
                </button>
            </form>
        </div>
    </div>
</section>
