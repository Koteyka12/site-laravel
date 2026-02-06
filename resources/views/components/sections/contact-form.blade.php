{{-- Anfrage senden --}}
<section class="pt-[70px] pb-[30px]">
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
