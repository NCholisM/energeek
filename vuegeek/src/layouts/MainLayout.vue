<template>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <img src="../assets/energeek.png" alt="Energeek Logo">
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Apply Lamaran</p>

                    <!-- <form action="../../index.html" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="nama" class="form-control" id="nama" placeholder="Cth: Jhonatan Akbar">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option disabled selected value="">Pilih Jabatan</option>
                                <option>Frontend</option>
                                <option>Fullstack</option>
                                <option>QC</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="telepon" class="form-control" id="telepon" placeholder="Cth: 089123456">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Cth: cholis@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Tahun Lahir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Skill Set</label>
                            <select class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%">
                                <option>PHP</option>
                                <option>PostgreSQL</option>
                                <option>API</option>
                            </select>
                        </div>


                        <div class=" text-center">

                            <button type="submit" class="btn btn-danger btn-block">Apply</button>
                        </div>
                    </form> -->

                    <form action="" method="post" novalidate @submit.prevent="submitForm">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" v-model="nama" placeholder="Cth: Cholis"
                                required :class="{ 'is-invalid': isInvalidNama }">
                            <div class="invalid-feedback" v-if="isInvalidNama">Nama harus diisi</div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select v-model="selectedJob" class="form-control select2" style="width: 100%;"
                                data-placeholder="Pilih Jabatan">
                                <option v-for="job in jobs" :key="job.id" :value="job.id">
                                    {{ job.name }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input v-model="telepon" type="tel" pattern="^[0-9]+$" class="form-control" id="telepon"
                                placeholder="Cth: 089123456" required :class="{ 'is-invalid': isInvalidTelepon }">
                            <div class="invalid-feedback">Telepon harus diisi dengan angka</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input v-model="email" type="email" class="form-control" id="email"
                                placeholder="Cth: cholis@gmail.com" required :class="{ 'is-invalid': isInvalidEmail }">
                            <div class="invalid-feedback">Email harus diisi dan harus sesuai menggunakan @</div>
                        </div>

                        <div class="form-group">
                            <label>Tahun Lahir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Pilih Tahun"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Skill Set</label>
                            <select v-model="selectedSkill" class="select2" multiple="multiple"
                                data-placeholder="Pilih Skill" style="width: 100%">
                                <option v-for="skill in skills" :key="skill.id" :value="skill.id">
                                    {{ skill.name }}
                                </option>
                            </select>
                        </div>


                        <div class=" text-center">

                            <button type="submit" class="btn btn-danger btn-block">Apply</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </body>
</template>
<script>
import '@/css/custom.css';
import { reactive, ref, onMounted } from "vue";
import axios from "axios";

export default {
    setup() {
        const jobs = ref([]);
        const skills = ref([]);

        onMounted(() => {
            axios
                .get("http://localhost:8000/api/jobs")
                .then((response) => {
                    jobs.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        });
        onMounted(() => {
            axios
                .get("http://localhost:8000/api/skills")
                .then((response) => {
                    skills.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        });

        return {
            jobs,
            skills,
        };
    },

    data() {
        return {
            nama: '',
            telepon: '',
            email: '',
            isInvalidNama: false,
            isInvalidTelepon: false,
            isInvalidEmail: false,
        };
    },
    methods: {
        submitForm() {
            this.isInvalidNama = !this.nama;
            this.isInvalidTelepon = !/^\d+$/.test(this.telepon);
            this.isInvalidEmail = !this.email.includes('@');

            if (!this.isInvalidNama && !this.isInvalidTelepon && !this.isInvalidEmail) {
            }
        }
    }

}
</script>
