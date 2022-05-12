<template>
    <div>
        <div class="div-mobile-main content-2 mb-5" style="display: block; position: relative;">
            <div class="row pt-3">
                <div class="col-md-12">
                    <h5 class="mb-3">Step To Win</h5>
                    <ul class="list-group">
                        <li
                            class="
                                list-group-item
                                d-flex
                                justify-content
                                align-items-center
                                mmy-borderless
                                pt-0
                            "
                        >
                            <span
                                class="
                                    badge badge-primary badge-pill
                                    no-info-badge
                                "
                                >1</span
                            >
                            <span class="px-3">
                                Share a photo of your kid with SuperKid club
                                Activity box on FB/IG
                            </span>
                        </li>
                        <li
                            class="
                                list-group-item
                                d-flex
                                justify-content
                                align-items-center
                                mmy-borderless
                            "
                        >
                            <span
                                class="
                                    badge badge-primary badge-pill
                                    no-info-badge
                                "
                                >2</span
                            >
                            <span class="px-3">
                                Tag us @motherhood.com.my & hashtag
                                <br />
                                #MotherhoodSuperKid
                                <br />
                                #motherhoodcommy
                            </span>
                        </li>
                        <li
                            class="
                                list-group-item
                                d-flex
                                justify-content
                                align-items-center
                                mmy-borderless
                            "
                        >
                            <span
                                class="
                                    badge badge-primary badge-pill
                                    no-info-badge
                                "
                                >3</span
                            >
                            <span class="px-3">
                                Make sure your post is set to “Public” and
                                you’re entitled for the lucky draw!
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="row px-4 my-4">
                <h5 class="mb-3">Events</h5>
                <vue-horizontal-list
                    :items="events"
                    :options="options"
                    style="width: 100%"
                >
                    <template v-slot:default="{ item }">
                        <b-card no-body class="mb-2 video-card">
                            <div class="event-header px-3 py-2">
                                <span>{{ item.date }}</span>
                            </div>
                            <b-card-text
                                class="text-left article-title-txt px-3"
                            >
                                <p>{{ item.title }}</p>
                                <div>
                                    <div
                                        class="px-3 mb-1"
                                        style="background-color: #fafafa"
                                    >
                                        <b-icon
                                            icon="clock-fill"
                                            class="mr-2"
                                        ></b-icon>
                                        <span>{{ item.time }}</span>
                                    </div>
                                    <div
                                        class="px-3 mb-1"
                                        style="background-color: #fafafa"
                                    >
                                        <b-icon
                                            icon="person-circle"
                                            class="mr-2"
                                        ></b-icon>
                                        <span>{{ item.person }}</span>
                                    </div>
                                    <div
                                        class="px-3 mb-1"
                                        style="background-color: #fafafa"
                                    >
                                        <b-icon
                                            icon="info-circle-fill"
                                            class="mr-2"
                                        ></b-icon>
                                        <span>{{ item.about }}</span>
                                    </div>
                                </div>
                                <div>
                                    <a :href="item.event_url" target="_blank">
                                        <button
                                            type="button"
                                            class="
                                                btn
                                                btn-primary
                                                btn-lg
                                                btn-block
                                                btn-journey
                                                event-btn
                                                py-1
                                                mt-3
                                            "
                                        >
                                            View Event
                                        </button>
                                    </a>
                                </div>
                            </b-card-text>
                        </b-card>
                    </template>
                </vue-horizontal-list>
            </div> -->
            <div class="row px-4 my-4">
                <h5 class="mb-3">Activity Box</h5>
                <vue-horizontal-list
                    :items="activityBox"
                    :options="options"
                    style="width: 100%"
                >
                    <template v-slot:default="{ item }">
                        <b-card
                            tag="article"
                            class="mb-2 video-card"
                            :img-src="item.image"
                            img-alt="Image"
                            img-top
                            @click="showActivityBoxModal(item)"
                        >
                            <div class="card-img-overlay pt-1">
                                <b-row class="">
                                    <b-col cols="12" class="px-1 text-right">
                                        <img
                                            class="reading-icon"
                                            src="/icons/eye.png"
                                            alt="Responsive image"
                                        />
                                    </b-col>
                                </b-row>
                            </div>
                            <b-card-text class="text-left article-title-txt">
                                {{ item.content }}
                            </b-card-text>
                        </b-card>
                    </template>
                </vue-horizontal-list>
                <b-modal
                    ref="activity-box-modal"
                    hide-footer
                    centered
                    title="Activity Box"
                >
                    <div class="d-block">
                        <b-img
                            :src="activityBox[activity_box_modal_id].image"
                            fluid-grow
                        ></b-img>
                    </div>
                    <div>
                        <p>{{ activityBox[activity_box_modal_id].content }}</p>
                    </div>
                </b-modal>
            </div>
            <div class="row px-4 my-4">
                <h5 class="mb-3">
                    Check out what other mums think about Superkids Club!
                </h5>
                <vue-horizontal-list
                    :items="activityBoxReview"
                    :options="options"
                    style="width: 100%"
                >
                    <template v-slot:default="{ item }">
                        <b-card
                            tag="article"
                            class="mb-2 video-card"
                            :img-src="item.image"
                            img-alt="Image"
                            img-top
                            @click="showReviewModal(item)"
                        >
                            <div class="">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                            <b-card-text class="text-left article-title-txt">
                                <p>{{ item.content }}</p>
                                <b>{{ item.name }}</b>
                            </b-card-text>
                        </b-card>
                    </template>
                </vue-horizontal-list>
                <b-modal
                    ref="review-modal"
                    hide-footer
                    centered
                    title="Check out what other mums think about Superkids Club!"
                >
                    <div class="d-block">
                        <b-img
                            :src="activityBoxReview[review_modal_id].image"
                            fluid-grow
                        ></b-img>
                    </div>
                    <div class="mt-3">
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                    </div>
                    <div>
                        <p>{{ activityBoxReview[review_modal_id].content }}</p>
                        <p class="mb-0 font-weight-bold">
                            {{ activityBoxReview[review_modal_id].name }}
                        </p>
                    </div>
                </b-modal>
            </div>
            <div class="row px-4 my-4">
                <h5 class="mb-3">Join The #MotherhoodSuperKid Family</h5>
                <vue-horizontal-list
                    :items="joinNowGallery"
                    :options="options"
                    style="width: 100%"
                >
                    <template v-slot:default="{ item }">
                        <b-card
                            tag="article"
                            class="mb-2 gallery-card"
                            :img-src="item.image"
                            img-alt="Image"
                            img-top
                            @click="showmotherhoodSuperKidModal(item)"
                        >
                            <div class="card-img-overlay pt-1">
                                <b-row class="">
                                    <b-col cols="12" class="px-1 text-right">
                                        <img
                                            class="reading-icon"
                                            src="/icons/eye.png"
                                            alt="Responsive image"
                                        />
                                    </b-col>
                                </b-row>
                            </div>
                        </b-card>
                    </template>
                </vue-horizontal-list>
                <b-modal
                    ref="motherhoodSuperKid-modal"
                    hide-footer
                    centered
                    title="Join The #MotherhoodSuperKid Family"
                >
                    <div class="d-block">
                        <b-img
                            :src="
                                joinNowGallery[motherhoodSuperKid_modal_id]
                                    .image
                            "
                            fluid-grow
                        ></b-img>
                    </div>
                </b-modal>
            </div>
            <div class="row px-4 my-5">
                <div class="col-md-12 row-mobile px-0 mb-3">
                    <a
                        href="https://www.instagram.com/explore/tags/motherhoodsuperkid/"
                        target="_blank"
                        style="width: 100%"
                    >
                        <button
                            type="button"
                            class="
                                btn btn-primary btn-lg btn-block
                                see-more-on-ig
                            "
                        >
                            <img src="/icons/ig-white.png" class="pr-2" />
                            See more on instagram
                        </button>
                    </a>
                </div>
                <div class="col-md-12 row-mobile px-0">
                    <a
                        href="https://www.facebook.com/hashtag/motherhoodsuperkid/?_rdc=1&amp;_rdr"
                        target="_blank"
                        style="width: 100%"
                    >
                        <button
                            type="button"
                            class="
                                btn btn-primary btn-lg btn-block
                                see-more-on-fb
                            "
                        >
                            <img src="/icons/fb-white.png" class="pr-2" />
                            See more on facebook
                        </button>
                    </a>
                </div>
            </div>
            <div class="row px-4 pb-5">
                <h5 class="mb-3">FAQ's</h5>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-1
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    How do I apply for Superkids Club
                                    membership?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-1"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >Complete our online registration form to enjoy
                                exclusive member benefits.</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-2
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    Can I register if I am already a
                                    Motherhood.com.my member?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-2"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >Yes. Existing members are welcomed to
                                apply.</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-3
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    How do I redeem the Superkids Club Activity
                                    Box?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-3"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >Redemption will only be accepted with the FULL
                                postal address provided. To redeem the Superkids
                                Box, you are required to pay the associated
                                shipping fee at the checkout page.</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-4
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    How do I receive other free gifts/samples
                                    from brands?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-4"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >The redemption may vary subject to
                                availability. For Dugro, redemption is only
                                valid for parents with children aged between 1
                                to 3 years old. For Aptaclub/Anmum Essential
                                Gold, redemption is only valid for parents with
                                children aged between 1 to 6 years
                                old.</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-5
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    How much is the shipping fee?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-5"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >RM15. Kindly note that shipping fee may vary
                                from time to time. In conjunction with the
                                launching of Super Kids Club, first 300 members
                                will be entitled to RM8 shipping
                                fee!</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-6
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    How long does it take to deliver my gift(s)?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-6"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >About 7–14 working days upon verification.
                                Kindly expect shipping delays due to a high
                                volume of orders at the moment.</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
                <b-card no-body class="p-0 w-100 mb-2">
                    <b-card-header
                        header-tag="header"
                        class="p-0 w-100"
                        role="tab"
                    >
                        <b-button
                            block
                            v-b-toggle.accordion-7
                            variant="white"
                            class="text-left"
                        >
                            <div class="row">
                                <div class="col-10 pr-0">
                                    Why are some of the products I received look
                                    different from the image on the website?
                                </div>
                                <div class="col-2 text-right">
                                    <b-icon
                                        icon="plus"
                                        class="ml-auto"
                                    ></b-icon>
                                </div>
                            </div>
                        </b-button>
                    </b-card-header>
                    <b-collapse
                        id="accordion-7"
                        accordion="my-accordion"
                        role="tabpanel"
                    >
                        <b-card-body class="p-3">
                            <b-card-text
                                >Pictures shown on our website are for
                                illustration purposes only. Gifts may vary
                                depending on the availability and age group.
                                E.g. Scott's DHA Gummies will only be
                                distributed to kids aged 5 and above. In the
                                case of insufficient stocks, the organiser has
                                the right to use other products for replacement
                                at any time without prior notice.</b-card-text
                            >
                        </b-card-body>
                    </b-collapse>
                </b-card>
            </div>

            <div class="col-md-12 row-mobile join-superkid-btn p-4">
                <button
                    type="button"
                    class="btn btn-primary btn-lg btn-block btn-journey"
                    @click="joinNow()"
                >
                    Join SuperKids Club Now
                </button>
            </div>
        </div>
        <div class="div-mobile-main content-3" style="display: none">
            <div class="" style="width: 100%">
                <div class="step-1 mb-5">
                    <div class="row p-3">
                        <div class="col-md-12 p-0">
                            <ul class="list-group">
                                <li
                                    class="
                                        list-group-item
                                        d-flex
                                        justify-content
                                        align-items-center
                                        mmy-borderless
                                    "
                                >
                                    <span
                                        class="
                                            badge badge-primary badge-pill
                                            no-info-form-badge
                                        "
                                        >1 of 6</span
                                    >
                                    <span class="px-3">
                                        <font style="font-size: 26px">
                                            Personal Information</font
                                        >
                                        <br />
                                        <!-- <small
                                            >Next step add your child
                                            information</small
                                        > -->
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ValidationObserver ref="personalInfo">
                        <b-form class="row mx-0" slot-scope="{ validate }" @submit.prevent="validate().then(submitParentInfo)">
                            <!-- <h5 class="mb-3">
                                Ready to be a Motherhood Super Kid?
                            </h5> -->

                             <ValidationProvider rules="required|alpha_spaces" name="First Name" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="First Name">
                                    
                                    <b-form-input
                                        type="text"
                                        name="firstname"
                                        class="form-control"
                                        placeholder="First name"
                                        v-model="form.first_name"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>
                            <ValidationProvider rules="required|alpha_spaces" name="Last name" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Last Name">
                                    
                                    <b-form-input
                                        type="text"
                                        name="lastname"
                                        class="form-control"
                                        placeholder="Last Name"
                                        v-model="form.last_name"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>
                            <ValidationProvider rules="required" name="Parent dob" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Date of birth">
                                    <b-form-input
                                        type="text"
                                        id="parent-dob"
                                        name="parent_dob"
                                        class="form-control"
                                        placeholder="Date of birth"
                                        v-model="form.parent_dob"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>
                            <ValidationProvider rules="required" name="Parent gender" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Gender">
                                    <b-form-select 
                                        name="parent_gender"
                                        v-model="form.parent_gender" 
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    >
                                    <template>
                                        <b-form-select-option value="" disabled>Gender</b-form-select-option>
                                        <b-form-select-option value="Male">Male</b-form-select-option>
                                        <b-form-select-option value="Female">Female</b-form-select-option>
                                    </template>
                                    </b-form-select>
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>
                            <ValidationProvider rules="required|min:7" name="Mobile no" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Mobile no.">
                                    
                                    <b-form-input
                                        type="text"
                                        name="mobile_no"
                                        class="form-control"
                                        onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                        placeholder="Mobile no."
                                        v-model="form.mobile_number"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>
                            <ValidationProvider rules="required|email" name="Email" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Email">
                                    
                                    <b-form-input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Email"
                                        v-model="form.email"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                        @change="checkEventsRegistration()"
                                        disabled
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>

                            <!-- <ValidationProvider rules="required|min:6" name="Password" v-if="user_exist == 0" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Password">
                                    
                                    <b-form-input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Password"
                                        v-model="form.password"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>

                            <ValidationProvider rules="required|confirmed:Password" name="Confirm Password" v-if="user_exist == 0" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Confirm Password">
                                    
                                    <b-form-input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Confirm Password"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                        v-model="form.confirm_password"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider> -->

                           

                            

                            
                            <!--
                            <ValidationProvider rules="required" name="Address 1" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Address 1">
                                    
                                    <b-form-input
                                        type="text"
                                        name="address1"
                                        class="form-control"
                                        placeholder="Address 1"
                                        v-model="form.address"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>

                            <b-col class="col-12 px-0">
                                <b-form-group label="Address 2 (Optional)">
                             
                                    <b-form-input
                                        type="text"
                                        name="address2"
                                        class="form-control"
                                        placeholder="Address 2"
                                        v-model="form.address_2"
                                    />
                                </b-form-group>
                            </b-col>

                            <ValidationProvider rules="required|min:5|max:5" name="Postcode" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="Postcode">
                             
                                    <b-form-input
                                        type="text"
                                        name="postcode"
                                        class="form-control"
                                        onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                        placeholder="Postcode"
                                        v-model="form.postal_code"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                        @change="getStateCitybyPostcode()"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>

                            <ValidationProvider rules="required" name="City" class="col-12 px-0">
                                <b-form-group slot-scope="{ valid, errors }" label="City">
                             
                                    <b-form-input
                                        type="text"
                                        name="city"
                                        class="form-control"
                                        placeholder="City"
                                        v-model="form.town_city"
                                        :state="errors[0] ? false : (valid ? true : null)"
                                    />
                                    <b-form-invalid-feedback>
                                        {{ errors[0] }}
                                    </b-form-invalid-feedback>
                                </b-form-group>
                            </ValidationProvider>
                            -->

                            <div class="col-12 text-center px-0 mb-5">
                                <button
                                    type="submit"
                                    class="
                                        btn btn-primary btn-lg btn-block btn-journey
                                    "
                                    :disabled="isDisable"
                                >
                                    Continue
                                </button>
                            </div>

                        </b-form>
                    </ValidationObserver>
                </div>
                <ValidationObserver ref="familyinfo">
                    <b-form
                        class="step-3 mb-5"
                        style="display: none"
                        slot-scope="{ validate }" @submit.prevent="validate().then(submitForm)"
                    >

                        <ValidationProvider rules="required" name="Marital status" class="col-12 px-0">
                            <b-form-group slot-scope="{ valid, errors }" label="Marital Status">
                                <b-form-select 
                                    name="marital_status"
                                    v-model="form.marital_satus" 
                                    :state="errors[0] ? false : (valid ? true : null)"
                                >
                                <template>
                                    <b-form-select-option value="" disabled>Please select marital status</b-form-select-option>
                                    <b-form-select-option value="Married">Married</b-form-select-option>
                                    <b-form-select-option value="Single">Single</b-form-select-option>
                                </template>
                                </b-form-select>
                                <b-form-invalid-feedback>
                                    {{ errors[0] }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </ValidationProvider>
                        <ValidationProvider rules="required" name="Pregnancy status" class="col-12 px-0">
                            <b-form-group slot-scope="{ valid, errors }" label="Are you pregnant?">
                                <b-form-select 
                                    name="pregnancy_status"
                                    v-model="form.pregnancy_status" 
                                    :state="errors[0] ? false : (valid ? true : null)"
                                >
                                <template>
                                    <b-form-select-option value="" disabled>Please select pregnancy status</b-form-select-option>
                                    <b-form-select-option value="yes">Yes</b-form-select-option>
                                    <b-form-select-option value="no">No</b-form-select-option>
                                </template>
                                </b-form-select>
                                <b-form-invalid-feedback>
                                    {{ errors[0] }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </ValidationProvider>
                        <ValidationProvider rules="required" name="Estimate due date" class="col-12 px-0">
                            <b-form-group slot-scope="{ valid, errors }" label="Date of birth">
                                <b-form-input
                                    type="text"
                                    id="edd"
                                    name="edd"
                                    class="form-control"
                                    placeholder="Estimate due date"
                                    v-model="form.edd"
                                    :state="errors[0] ? false : (valid ? true : null)"
                                />
                                <b-form-invalid-feedback>
                                    {{ errors[0] }}
                                </b-form-invalid-feedback>
                            </b-form-group>
                        </ValidationProvider>

                        <div class="col-12 text-center px-0 mb-5">
                            <button
                                type="submit"
                                class="
                                    btn btn-primary btn-lg btn-block btn-journey
                                "
                                :disabled="isDisable"
                            >
                                Continue
                            </button>
                        </div>

                    </b-form>
                </ValidationObserver>

                
                <ValidationObserver ref="childinfo">
                    <b-form
                        class="step-2 mb-5"
                        style="display: none"
                        slot-scope="{ validate }" @submit.prevent="validate().then(submitForm)"
                    >
                        <div class="row p-3">
                            <div class="col-md-12 px-0">
                                <ul class="list-group">
                                    <li
                                        class="
                                            list-group-item
                                            d-flex
                                            justify-content
                                            align-items-center
                                            mmy-borderless
                                        "
                                    >
                                        <span
                                            class="
                                                badge badge-primary badge-pill
                                                no-info-form-badge
                                            "
                                            >2 of 2</span
                                        >
                                        <span class="px-3">
                                            <font style="font-size: 26px">
                                                Child Details</font
                                            >
                                            <br />
                                            <small class="form-goback-text">
                                                <a
                                                    href="#"
                                                    class="go-back-step-form"
                                                >
                                                    Go Back to previous step
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M10.0001 6L8.59009 7.41L13.1701 12L8.59009 16.59L10.0001 18L16.0001 12L10.0001 6Z"
                                                            fill="#2DA7AC"
                                                        />
                                                    </svg>
                                                </a>
                                            </small>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="div-child">
                            <div
                                class="div-child-detail"
                                v-for="(form, index) in form_index"
                                :key="index"
                            >
                                <div class="row px-0">
                                    <div
                                        class="
                                            row
                                            m-0
                                            row-display-content
                                            col-md-12
                                        "
                                    >
                                        <div class="col-6">
                                            <p class="title-child font-weight-bold">
                                                Child # {{ index + 1 }}
                                            </p>
                                        </div>
                                        <div class="col-6" style="text-align: end">
                                            <a
                                                href="#"
                                                class="remove-child-div"
                                                v-if="index > 0"
                                                @click="removeFormIndex()"
                                                >Remove</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row px-0">
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12">
                                            <ValidationProvider rules="required|alpha_spaces" name="Child name" class="col-12 px-0">
                                                <b-form-group slot-scope="{ valid, errors }" label="Child name">
                                                    <b-form-input
                                                        
                                                        :state="errors[0] ? false : (valid ? true : null)"
                                                        type="text"
                                                        name="childname1"
                                                        class="
                                                            form-control
                                                            child-name-input
                                                        "
                                                        placeholder="Child name"
                                                        v-model="child_form[index].child_name"
                                                    />
                                                    <b-form-invalid-feedback>
                                                        {{ errors[0] }}
                                                    </b-form-invalid-feedback>
                                                </b-form-group>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-0">
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12">
                                            <ValidationProvider rules="required|numeric|min:12|max:12" name="Mykid IC" class="col-12 px-0">
                                                <b-form-group slot-scope="{ valid, errors }" label="Mykid IC">
                                                    <b-form-input
                                                        :state="errors[0] ? false : (valid ? true : null)"
                                                        type="text"
                                                        name="mykid1"
                                                        class="
                                                            form-control
                                                            child-mykid-input
                                                        "
                                                        placeholder="Mykid IC"
                                                        v-model="child_form[index].ic_no"
                                                    />
                                                    <b-form-invalid-feedback>
                                                        {{ errors[0] }}
                                                    </b-form-invalid-feedback>
                                                </b-form-group>
                                            </ValidationProvider>
                                            <!-- <div class="form-group">
                                                <input
                                                    type="text"
                                                    name="mykid1"
                                                    class="
                                                        form-control
                                                        child-mykid-input
                                                    "
                                                    placeholder="Mykid IC"
                                                    @change="
                                                        inputField(
                                                            index,
                                                            $event,
                                                            'ic_no'
                                                        )
                                                    "
                                                    required
                                                />
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-0">
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12">
                                            <ValidationProvider rules="" name="Child birthday" class="col-12 px-0">
                                                <b-form-group label="Child birthday">
                                                    
                                                    <b-form-input
                                                        :state="child_dob_error[index].error"
                                                        type="text"
                                                        name="mykid1"
                                                        :id="'child-dob-'+index"
                                                        placeholder="Child birthday"
                                                        v-model="child_form[index].dob"
                                                        @focusout="checkDOB(child_form[index].dob,index)"
                                                    />
                                                    <b-form-invalid-feedback>
                                                        Child birthday invalid
                                                    </b-form-invalid-feedback>
                                                </b-form-group>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12">

                                            <ValidationProvider rules="min:7" name="Child contact" class="col-12 px-0">
                                                <b-form-group label="Child contact(optional)">
                                            
                                                    <b-form-input
                                                        type="text"
                                                        name="childcontact1"
                                                        class="form-control"
                                                        placeholder="Child contact(optional)"
                                                        inputmode="numeric"
                                                        v-model="child_form[index].mobile_number"
                                                    />
                                                    <!-- <b-form-invalid-feedback>
                                                        {{ errors[0] }}
                                                    </b-form-invalid-feedback> -->
                                                </b-form-group>
                                            </ValidationProvider>
                                            <!-- <div class="form-group">
                                                <input
                                                    type="text"
                                                    name="childcontact1"
                                                    class="
                                                        form-control
                                                        child-contact-input
                                                    "
                                                    placeholder="Child contact(optional)"
                                                    @change="
                                                        inputField(
                                                            index,
                                                            $event,
                                                            'mobile_number'
                                                        )
                                                    "
                                                />
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12">
                                            <ValidationProvider rules="required" name="Child gender" class="col-12 px-0">
                                                <b-form-group slot-scope="{ valid, errors }" label="Child gender">
                                                    <b-form-select 
                                                        name="Gender"
                                                        v-model="child_form[index].gender" 
                                                        :state="errors[0] ? false : (valid ? true : null)"
                                                    >
                                                    <template>
                                                        <b-form-select-option value="" disabled>Gender</b-form-select-option>
                                                        <b-form-select-option value="Male">Male</b-form-select-option>
                                                        <b-form-select-option value="Female">Female</b-form-select-option>
                                                    </template>
                                                    </b-form-select>
                                                    <b-form-invalid-feedback>
                                                        {{ errors[0] }}
                                                    </b-form-invalid-feedback>
                                                </b-form-group>
                                            </ValidationProvider>
                                            <!-- <div class="form-group">
                                                <select
                                                    class="
                                                        form-control
                                                        child-gender-input
                                                    "
                                                    name="childgender1"
                                                    @change="
                                                        inputField(
                                                            index,
                                                            $event,
                                                            'gender'
                                                        )
                                                    "
                                                    required
                                                >
                                                    <option
                                                        value=""
                                                        disabled
                                                        selected
                                                    >
                                                        Select Gender
                                                    </option>
                                                    <option value="Male">
                                                        Male
                                                    </option>
                                                    <option value="Female">
                                                        Female
                                                    </option>
                                                </select>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12">
                                            <ValidationProvider rules="required" name="Current Milk Brand" class="col-12 px-0">
                                                <b-form-group slot-scope="{ valid, errors }" label="Select Current Milk Brand">
                                                    <b-form-select 
                                                        name="Milk Brand"
                                                        v-model="child_form[index].milk_brand" 
                                                        :options="milk_brand"
                                                        value-field="id"
                                                        text-field="name"
                                                        :state="errors[0] ? false : (valid ? true : null)"
                                                    >
                                                    <template #first>
                                                        <b-form-select-option value="" disabled>Select Current Milk Brand</b-form-select-option>
                                                        <!-- <b-form-select-option 
                                                        v-for="brand in milk_brand"
                                                        :key="brand.id"
                                                        :value="brand.id">{{ brand.name }}</b-form-select-option> -->
                                                    </template>
                                                    </b-form-select>
                                                    <b-form-invalid-feedback>
                                                        {{ errors[0] }}
                                                    </b-form-invalid-feedback>
                                                </b-form-group>
                                            </ValidationProvider>
                                            <!-- <div class="form-group">
                                                <select
                                                    class="
                                                        form-control
                                                        child-currentmilkbrand-input
                                                    "
                                                    name="childmilkbrand1"
                                                    @change="
                                                        inputField(
                                                            index,
                                                            $event,
                                                            'milk_brand'
                                                        )
                                                    "
                                                >
                                                    <option
                                                        value=""
                                                        disabled
                                                        selected
                                                    >
                                                        Select Current Milk Brand
                                                    </option>
                                                    <option
                                                        v-for="brand in milk_brand"
                                                        :key="brand.id"
                                                        :value="brand.id"
                                                    >
                                                        {{ brand.name }}
                                                    </option>
                                                </select>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-0 mt-2 mb-4">
                                    <div class="row row-display-content col-md-12">
                                        <div class="col-md-12" v-if="form_index < 3">
                                            <a
                                                href="#"
                                                class="add-more-child"
                                                @click="addFormIndex()"
                                                >Add more child</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row px-0 mt-2 mb-4">
                            <div class="row row-display-content col-md-12">
                                    <div class="form-check">

                                            <ValidationProvider rules="" name="T&C" class="col-12 px-0">

                                                <b-form-group>
                                                    <b-form-checkbox
                                                        class="form-check-box"
                                                        type="checkbox"
                                                        :value="true"
                                                        :unchecked-value="false"
                                                        id="defaultCheck1"
                                                        v-model="form.tnc"
                                                        :state="form.tnc"
                                                    >
                                                        <label
                                                            class="form-check-label"
                                                            for="defaultCheck1"
                                                        >
                                                            T&C: By submitting this application, I hereby agree to the Terms & Conditions and the processing of my personal data in accordance with the terms of the Privacy Policy. Motherhood.com.my may collect my personal details and use for communication purposes and other milk brand collaborations that include but are not limited to club memberships, Motherhood.com.my products, and Motherhood.com.my brands only.
                                                            <br/>
                                                            <br/>
                                                            Each registered household is entitled to receive ONE (1) Superkid Activity Box only.
                                                        </label>
                                                        <b-form-invalid-feedback>
                                                            Please check the T&C before submit
                                                        </b-form-invalid-feedback>
                                                    </b-form-checkbox>

                                                </b-form-group>
                                            </ValidationProvider>
                                    </div>
                            </div>
                        </div>
                        <div class="row-mobile px-0 pb-5 mt-2">
                            <button
                                type="submit"
                                class="
                                    btn
                                    btn-primary
                                    btn-lg
                                    btn-block
                                    btn-journey
                                    btn-submit-details
                                "
                            >
                                Submit Details
                            </button>
                        </div>
                    </b-form>
                </ValidationObserver>
            </div>
        </div>
        <div class="div-mobile-main content-4" style="display: none">
            <div class="d-flex align-items-center">
                <div class="row-mobile info-superkids-1 mt-5">
                        <div class="d-flex justify-content-center fullwidth">
                            <img src="../../../../../../../../public/images/superkids/picture_superkid1.svg" style="width: 70%;" />
                        </div>
                        <div class="justify-content-center fullwidth mt-3">
                            <p class="mobile-title text-center">You Have Registered For Motherhood SuperKids. Thank You!</p>
                        </div>
                        <div
                            class="text-center w-100 mt-5"
                        >
                            <button
                                type="button"
                                class="btn btn-primary btn-lg btn-block btn-journey"
                                @click="
                                    $router.push({
                                        path: '/home'
                                    })
                                "
                            >
                                Go to Home
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
window.$ = require('jquery');

export default {
    components: {},

    computed: {
      nameState() {
        return this.form.length > 2 ? true : false
      },
      checkboxState() {
        return this.form.parent_gift.length >= 1
      }
    },
    data: () => ({
        form_index: 1,
        user_exist: 0,
        isDisable: false,
        form: {
            event_id: "93",
            first_name: "",
            last_name: "",
            password: "",
            confirm_password: "",
            email: "",
            mobile_number: "",
            address: "",
            address_2: "",
            postal_code: "",
            town_city: "",
            state: null,
            gender: "f",
            tnc: null,
            child_form: [],
            parent_gift: [],
            family_insurance: "",
            parent_dob: "",
            parent_gender: "",
            marital_satus: "",
            edd: "",
        },
        genderoption: [{ text: 'Select gender', value: "" }, 'Male', 'Female',],
        child_form: [],
        activityBox: [
            {
                index: 1,
                content: "Superkids Club Activity Box (Free): Choose",
                image: "https://media.motherhood.com.my/182658-large_default/superkids-club-activity-box-free.jpg",
            },
        ],
        events: [
            {
                date: "NOV 27, 2021 Saterday",
                title: "Creative Animation",
                time: "5.00 p.m.",
                person: "Gogokids",
                about: "Above 7 years old",
                event_url:
                    "https://docs.google.com/forms/d/e/1FAIpQLSdolZ5l48YqLje0vpKKi9vThYRCPa-pve4V0wF5LD9WcaLrSg/viewform",
            },
        ],
        activityBoxReview: [
            {
                index: 0,
                content:
                    "Thank you so much for the awesome Superkids Club Activity Box, what a lovely surprise. The kids are so excited and happy. Thank you Motherhood.com.my",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/sp1.png",
                name: "Suk Teng Leong",
            },
            {
                index: 1,
                content:
                    "Terima kasih Motherhood atas hadiah Superkids Club Activity Box. Anak teruja dan seronok dapat hadiah!",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Rashidah.png",
                name: "Rashidah Abdu Rahim",
            },
            {
                index: 2,
                content:
                    "My child is super excited to receive this Superkids Club Activity Box! There are body wash, oral aid, nappy cream, and toys for sensory play. He learn and play using all the products inside. Thank you for sending us such a creative activity box!",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Liew-Soo-Hui.png",
                name: "Liew Soo Hui",
            },
            {
                index: 3,
                content:
                    "Thank you motherhood for this awesome box that fully of entertainment &amp; joy for my son!",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nur-Hidayah.png",
                name: "Nur Hidayah Binti Mohd Nazri",
            },
            {
                index: 4,
                content:
                    "First thank you for the free activity box. As soon as my daughter sees the box, she was so excited to unbox and dig everything.. She love it, especially the flash cards that come with it.",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Mary-Joyce-Medina.png",
                name: "Mary Joyce Medina",
            },
            {
                index: 5,
                content:
                    "Anak umur 2y 5m mmg seronok sbb ada alphabet card tu. Brg2 yg ada dalam tu pon best boleh guna semuanya",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nurul-Asma.png",
                name: "Nurul Asma",
            },
            {
                index: 6,
                content:
                    "terima kasih motherhood... semua barangan dalam kotak saya suka dan anak pun gembira.",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Cyrena-deosing2.png",
                name: "Cyrena deosing",
            },
            {
                index: 7,
                content:
                    "Thanks for the free gifts! Only need to pay for the shipping fees! My kids like the activities box so much!",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Pick-Yee-Chen.png",
                name: "Pick Yee Chen",
            },
            {
                index: 8,
                content:
                    "Thank you for giving us a lot of goodies inside the Superkids Club Activity Box. My kids had so much fun playing with the flash card. So many benefit inside the box.",
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Superkids/review/Nik+Nor+Izyanty+Che+Mazlan.png",
                name: "Nik Nor Izyanty Che Mazlan",
            },
        ],
        joinNowGallery: [
            {
                index: 0,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/1.jpg",
            },
            {
                index: 1,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/2.jpg",
            },
            {
                index: 2,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/3.jpg",
            },
            {
                index: 3,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/4.jpg",
            },
            {
                index: 4,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/5.jpg",
            },
            {
                index: 5,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/6.jpg",
            },
            {
                index: 6,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/7.jpg",
            },
            {
                index: 7,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/8.jpg",
            },
            {
                index: 8,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/9.jpg",
            },
            {
                index: 9,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/10.jpg",
            },
            {
                index: 10,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/11.jpg",
            },
            {
                index: 11,
                image: "https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Super+Kids/testimonials/12.jpg",
            },
        ],
        options: {
            responsive: [
                { end: 576, size: 1 },
                { start: 576, end: 768, size: 2 },
                { start: 768, end: 992, size: 3 },
                { size: 4 },
            ],
            list: {
                // 1200 because @media (min-width: 1200px) and therefore I want to switch to windowed mode
                windowed: 1200,

                // Because: #app {padding: 80px 24px;}
                padding: 8,
                width: 280,
            },
            item: {
                padding: 9,
                class: "video-item",
            },
        },
        states: [],
        child_dob_error: [
            {error: null},
            {error: null},
            {error: null}
        ],
        milk_brand: [
            { name: "4m", id: "4m" },
            { name: "Abbott", id: "Abbott" },
            { name: "Anmum", id: "Anmum" },
            { name: "Appeton", id: "Appeton" },
            { name: "AptaGro", id: "AptaGro" },
            { name: "Aptamil", id: "Aptamil" },
            { name: "Awarua", id: "Awarua" },
            { name: "Baby Bio", id: "Baby Bio" },
            { name: "Baby Steps", id: "Baby Steps" },
            { name: "Bellamy's", id: "Bellamy's" },
            { name: "Colostrum", id: "Colostrum" },
            { name: "Dugro", id: "Dugro" },
            { name: "Dumex", id: "Dumex" },
            { name: "Dupro", id: "Dupro" },
            { name: "Dutch Baby", id: "Dutch Baby" },
            { name: "Dutch Lady", id: "Dutch Lady" },
            { name: "Enfagrow", id: "Enfagrow" },
            { name: "Enfalac", id: "Enfalac" },
            { name: "Enfamil", id: "Enfamil" },
            { name: "Farmers", id: "Farmers" },
            { name: "Fernleaf", id: "Fernleaf" },
            { name: "Friso", id: "Friso" },
            { name: "Frisolac", id: "Frisolac" },
            { name: "G-Star", id: "G-Star" },
            { name: "Glucerna", id: "Glucerna" },
            { name: "Habib", id: "Habib" },
            { name: "Karihome", id: "Karihome" },
            { name: "Lactogen", id: "Lactogen" },
            { name: "Lactogrow", id: "Lactogrow" },
            { name: "Lazz", id: "Lazz" },
            { name: "Mamex", id: "Mamex" },
            { name: "Mamil", id: "Mamil" },
            { name: "Merry Nation", id: "Merry Nation" },
            { name: "Miwako", id: "Miwako" },
            { name: "Morinaga Milk", id: "Morinaga Milk" },
            { name: "Nana", id: "Nana" },
            { name: "Nankid", id: "Nankid" },
            { name: "Nestle", id: "Nestle" },
            { name: "Novalac", id: "Novalac" },
            { name: "Pediasure", id: "Pediasure" },
            { name: "S26", id: "S26" },
            { name: "Similac", id: "Similac" },
            { name: "Snow", id: "Snow" },
            { name: "Suffy", id: "Suffy" },
            { name: "Sustagen", id: "Sustagen" },
            { name: "Wildan", id: "Wildan" },
            { name: "Wyeth", id: "Wyeth" },
            {
                name: "Not consuming milk formula",
                id: "Not consuming milk formula",
            },
            { name: "Others", id: "Others" },
        ],
        parent_gift: [
            // { text: "Aptaclub", value: "Aptaclub" },
            { text: "Anmum Essential", value: "Anmum Essential" },
            // { text: "Dugro", value: "Dugro" },
        ],
        activity_box_modal_id: 0,
        review_modal_id: 0,
        motherhoodSuperKid_modal_id: 0,
    }),
    created() {
        if (this.$route.params.token != undefined) {
            this.verifyToken();
        }
    },
    mounted() {
        this.pushToArray();
        this.getState();

        var calcDivChild = function () {
            var numDivChild = $("body").find(".div-child-detail").length;

            if (numDivChild == 1) {
                $("body")
                    .find(".remove-child-div.cloned")
                    .css("display", "none");
            } else {
                $("body")
                    .find(".remove-child-div.cloned")
                    .css("display", "block");
            }

            return numDivChild;
        };

        $(function () {
            calcDivChild();

            $("body").on("click", ".remove-child-div", function (evnt) {
                evnt.preventDefault();
                $(this).closest(".div-child-detail").remove();
                calcDivChild();
            });

            $("body").on("click", ".go-back-step-form", function () {
                $(this).closest(".step-2").hide("fast");
                $("body").find(".step-1").show("fast");
            });

           
            var selectorParentDOB = document.getElementById("parent-dob");
            Inputmask('datetime',{
                alias 		 :'datetime',
                inputFormat  : "dd/mm/yyyy", 
                separator: '/',
                leapday: "29/02/",
            }).mask(selectorParentDOB); 
        });

    },

    methods: {
        verifyToken() {
            axios
                .post("/api/event/submit_event_form", {token:this.$route.params.token})
                .then((response) => response.data)
                .then((response) => {
                    console.log('this success',response);
                })
                .catch((error) => {
                    
                });
        },
        checkDate() {
            console.log(this.form.child_form);
        },
        addFormIndex() {
            this.form_index = this.form_index + 1;

            this.pushToArray();

            var index = this.form_index - 1

            setTimeout(function(){ 
                var selectorDOB = document.getElementById("child-dob-"+index);
                Inputmask('datetime',{
                    alias 		 :'datetime',
                    inputFormat  : "dd/mm/yyyy", 
                    separator: '/',
                    leapday: "29/02/",
                }).mask(selectorDOB); 
            }, 500);
        },

        removeFormIndex() {
            this.form_index = this.form_index - 1;

            let index = this.child_form.length - 1;
            this.child_form.splice(index);
        },

        pushToArray() {
            let arr = {
                child_name: "",
                ic_no: "",
                dob: "",
                mobile_number: "",
                gender: "",
                milk_brand: "",
            };

            this.child_form.push(arr);
        },

        inputField(index, event, type) {
            if (type == "child_name") {
                console.log(event,'event');
                // this.child_form[index].child_name = event;
                console.log(this.child_form,'child_form');
            } else if (type == "ic_no") {
                this.child_form[index].ic_no = event.target.value;
            } else if (type == "dob") {
                this.child_form[index].dob = event.target.value;
            } else if (type == "mobile_number") {
                this.child_form[index].mobile_number = event.target.value;
            } else if (type == "gender") {
                this.child_form[index].gender = event.target.value;
            } else if (type == "milk_brand") {
                this.child_form[index].milk_brand = event.target.value;
            } else if (type == "state") {
                this.form.state = event.target.value;
            }
        },

        joinNow() {
            var email = this.$store.state.auth.email;

            if (email !== null) {
                this.form.email = email;
                this.checkEventsRegistration();
            } else {
            }
        },

        submitParentInfo() {
            // var length = this.form.parent_gift.length;
            // console.log(length,'lengthlengthlength');
            this.$refs.personalInfo.validate().then(success => {
                if (!success) {
                    return;
                }
                $("body").find(".step-1").hide("fast");
                $("body").find(".step-2").show("fast");

                var selectorDOB = document.getElementById("child-dob-0");
                Inputmask('datetime',{
                    alias 		 :'datetime',
                    inputFormat  : "dd/mm/yyyy", 
                    separator: '/',
                    leapday: "29/02/",
                    maxyear: 2021
                }).mask(selectorDOB); 
            });
        },

        checkEventsRegistration() {

            if(this.form.email != '') {
                let loader = this.$loading.show();
                axios
                    .get("/api/event/check_events_registration", {
                        params: {
                            event_id: "93",
                            email: this.form.email,
                        },
                    })
                    .then((response) => response.data)
                    .then((response) => {
                        if(response.data.result.exist == 0) {
                            this.isDisable = false;
                            $("body").find(".div-mobile-main").hide("fast");
                            $("body").find(".content-3").show("fast");
                            this.checkCustomerExist();
                        }else {
                            // this.isDisable = true;
                            $("body").find(".div-mobile-main").hide("fast");
                            // $("body").find(".content-4").show("fast");
                            $("body").find(".content-3").show("fast");
                            // let error_msg = 'This email already been registered for this event'
                            // this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
                        }
                        loader.hide();
                    })
                    .catch((error) => {
                        let error_msg = error.response.data.message;
                        this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
                        loader.hide();
                    });
            }else {
                this.isDisable = false;
            }
        },

        checkCustomerExist() {
            axios
                .get("/api/event/check_exist_customer", {
                    params: {
                        email: this.form.email,
                    },
                })
                .then((response) => response.data)
                .then((response) => {
                    this.user_exist = response.data.result.exist;
                    this.form.first_name =
                        response.data.result.user_info[0].firstname;
                    this.form.last_name =
                        response.data.result.user_info[0].lastname;
                    this.form.mobile_number =
                        response.data.result.user_info[0].phone_mobile;
                    this.form.address =
                        response.data.result.user_info[0].address1;
                    this.form.address_2 =
                        response.data.result.user_info[0].address2;
                    this.form.postal_code =
                        response.data.result.user_info[0].postcode;
                    this.form.state = response.data.result.user_info[0].state;
                    this.form.town_city =
                        response.data.result.user_info[0].city;
                })
                .catch((error) => {
                    this.user_exist = 0;
                    this.form.first_name = "";
                    this.form.last_name = "";
                    this.form.mobile_number = "";
                    this.form.address = "";
                    this.form.address_2 = "";
                    this.form.postal_code = "";
                    this.form.state = "";
                    this.form.town_city = "";
                });
        },

        submitForm() {
            
            // this.form.child_form = this.child_form;
            // console.log(this.form,'herererere');
            
            this.$refs.childinfo.validate().then(success => {
                let dob_error = false
                for (let i = 0; i < this.child_form.length; i++) {
                    if(this.child_form[i].dob == '') {
                        this.child_dob_error[i].error = false;
                        dob_error = true;
                    }
                }
                for (let i = 0; i < this.child_dob_error.length; i++) {
                    if(this.child_dob_error[i].error == false) {
                        dob_error = true;
                    }
                }

                if(this.form.tnc != true) {
                    this.form.tnc = false;
                }

                if (!success || dob_error || this.form.tnc != true) {
                    return;
                }
                
                let loader = this.$loading.show();
                this.form.child_form = this.child_form;
                console.log(this.form,'this.form-superkid');

                axios
                    .post("/api/event/submit_event_form", this.form)
                    .then((response) => response.data)
                    .then((response) => {
                        this.$bvToast.toast("Register Successful",{ variant:'success', noCloseButton: true, solid:true})
                        loader.hide();
                        
                        $("body").find(".div-mobile-main").hide("fast");
                        $("body").find(".content-4").show("fast");
                    })
                    .catch((error) => {
                        let error_msg = error.response.data.message;
                        
                        this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
                        loader.hide();
                    });

            });
        },

        getStateCitybyPostcode() {
            axios
                .get("/api/event/get_state_city_postcode", {
                    params: {
                        postcode: this.form.postal_code,
                    },
                })
                .then((response) => response.data)
                .then((response) => {
                    this.form.town_city = response.data.result.city;
                    this.form.state = response.data.result.state;
                    $(".state-select").val(response.data.result.state);
                })
                .catch((error) => {});
        },

        getState() {
            axios
                .get("/api/event/get_state_malaysia")
                .then((response) => response.data)
                .then((response) => {
                    this.states = response.data.result;
                })
                .catch((error) => {});
        },

        checkDOB(date,index) {
            const dates = date;
            const substring1 = "d";
            const substring2 = "m";
            const substring3 = "y";

            const result1 = dates.includes(substring1);
            const result2 = dates.includes(substring2);
            const result3 = dates.includes(substring3);
            if(result1 == true || result2 == true || result3 == true || date == '') {
                
                this.child_dob_error[index].error = false;
                console.log(this.child_dob_error,'this.child_dob_error');
            }else {
                this.child_dob_error[index].error = true;
            }
        },

        showActivityBoxModal(item) {
            this.activity_box_modal_id = item.index;
            this.$refs["activity-box-modal"].show();
        },

        showReviewModal(item) {
            this.review_modal_id = item.index;
            this.$refs["review-modal"].show();
        },

        showmotherhoodSuperKidModal(item) {
            this.motherhoodSuperKid_modal_id = item.index;
            this.$refs["motherhoodSuperKid-modal"].show();
        },
    },
};
</script>

<style lang="css" scoped>
@import "../../_vue_horizontal.css";
</style>
<style lang="css" scoped>
@import "../../_community_style.scss";

.container {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.div-mobile-main {
    padding: 0 15px;
}

.div-main-row {
    background-color: #f2f7fc;
}

.row-mobile {
    display: flex;
    flex-wrap: wrap;
    padding-left: 15px;
    padding-right: 15px;
}

.join-superkid-btn {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    max-width: 500px;
    z-index: 99;
    background: #fff;
    margin: 0 auto;
}

.h-100vh {
    min-height: 100vh;
}

.fullwidth {
    width: 100%;
}

.mobile-title {
    font-size: 24px;
    font-weight: 600;
}

.mobile-description {
    font-size: 16px;
}

.btn-journey,
.btn-journey:hover,
.btn-journey:active,
.btn-journey:focus,
.btn-journey:disabled {
    background-color: #2da7ac;
    border-color: #2da7ac;
}

#button-skip,
.btn-skip {
    color: #313030 !important;
    background-color: white !important;
    border-color: white !important;
    box-shadow: unset !important;
    border-radius: 20px;
    width: 60px;
}

.btn-skip:hover,
.btn-skip:active,
.btn-skip:focus,
.btn-skip:focus-visible {
    color: #313030 !important;
    background-color: white !important;
    border-color: white !important;
    box-shadow: unset !important;
    border-radius: 20px;
    width: 60px;
}

.superkid-form input,.superkid-form select, .superkid-form .child-dob-input {
    border: none;
    background-color: #EEF3F7;
    border-radius: 4px;
    color: #6E7173;
    font-size: 14px;
    height: 56px;
}

.superkid-form .child-dob-input {
    display: flex !important;
    align-items: center !important;
}

.superkid-form a,.go-back-step-form {
    color: #2DA7AC;
}
.btn-icon-close {
    background-color: transparent !important;
    border: 0px !important;
    box-shadow: unset !important;
}

.btn-icon-close:hover,
.btn-icon-close:active,
.btn-icon-close:focus,
.btn-icon-close:focus-visible {
    background-color: transparent !important;
    border: 0px !important;
    box-shadow: unset !important;
}

.btn-info-next,
.btn-info-next:hover,
.btn-info-next:active,
.btn-info-next:focus,
.btn-info-next:focus-visible,
.btn-info-previous,
.btn-info-previous:hover,
.btn-info-previous:active,
.btn-info-previous:focus,
.btn-info-previous:focus-visible {
    background-color: transparent !important;
    border: 0px !important;
    box-shadow: unset !important;
    padding: 0px;
}

.btn-info-next svg {
    width: 100%;
}

.btn-info-previous svg {
    width: 100%;
}

.step-info-active {
    padding-top: 12px;
    padding-bottom: 12px;
    width: 70px;
    font-weight: 600;
    background-color: #2da7ac;
    font-size: 13px;
    border-radius: 20px;
}

.step-info {
    border-radius: 50%;
    width: 40px;
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: white;
    font-size: 13px;
    color: #6e7173;
    font-weight: 600;
}

.animationtry {
    animation-direction: normal;
}

.no-info-badge {
    font-size: 18px;
    padding-right: 10px;
    padding-left: 10px;
    padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 50% !important;
    text-align: center;
    background-color: #e1f4f5;
    color: #347277;
}

.mmy-borderless {
    border: 0px;
}

.no-info-form-badge {
    font-size: 15px;
    padding-right: 20px;
    padding-left: 20px;
    padding-top: 30px;
    padding-bottom: 30px;
    border-radius: 60% !important;
    text-align: center;
    background-color: #e1f4f5;
    color: #464e4e;
}

.mmy-borderless {
    border: 0px;
}

.row-display-content {
    display: contents !important;
}

.list-group-item {
    padding-left: 0;
    padding-right: 0;
}

.superkid-form input,
.superkid-form select {
    border: none;
    background-color: #eef3f7;
    border-radius: 4px;
    color: #6e7173;
    font-size: 14px;
    height: 56px;
}

.superkid-form a,
.go-back-step-form {
    color: #2da7ac;
}

.remove-child-div {
    color: #f67f1e !important;
}

.article-title-txt {
    color: #313030;
    padding-bottom: 5px;
    padding-top: 5px;
    font-size: 14px;
    margin-bottom: 0px;
}

.gallery-card .card-body {
    padding: 0;
}

.see-more-on-ig {
    background-color: #ec3c65;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}
.see-more-on-fb {
    background-color: #4374b6;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

.event-header {
    background-color: #2da7ac;
    color: #fff;
}

.event-btn {
    font-size: 14px;
    border-radius: 0;
}

.card-img-top {
    height: auto !important;
    min-height: 278px !important;
}

::v-deep .form-check-box {
    margin-top: 10px;
}

::v-deep .form-check-box .form-check {
    margin-bottom: 10px !important;
}

::v-deep .form-check-box .form-check .form-check-input {
    transform: scale(1.5) !important;
}

@media only screen and (min-width: 768px) {
    .div-main-row {
        min-width: 500px;
    }
}
</style>
