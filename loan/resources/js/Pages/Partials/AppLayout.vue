<template>
    <div>
        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <KTMobile></KTMobile>
        <!--end::Header Mobile-->
        <div className="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div className="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <side-bar></side-bar>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div className="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                  <bottom-header></bottom-header>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <slot></slot>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                     <app-footer></app-footer>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        <!-- begin::User Panel-->
         <quick-user></quick-user>
        <!-- end::User Panel-->
    </div>
</template>

<script>


import Footer from "./Footer";
import SideBar from "./SideBar";
import BottomHeader from "./BottomHeader";
import MobileHeader from "./MobileHeader";
import QuickUser from "./QuickUser";
import KTMobile from "../layout/header/HeaderMobile";

export default {
    components:{
      'app-footer':Footer,
      SideBar,
      BottomHeader,
      MobileHeader,
      QuickUser,
      KTMobile
    },
    data() {
        return {}
    },
    created() {
    }
}
///
</script>

<style scoped>

</style>
