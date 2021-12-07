<template>
  <!-- begin:: Header Topbar -->
  <div class="topbar">
    <!--begin: Quick panel toggle -->
<!--    <KTQuickPanel></KTQuickPanel>-->
    <!--end: Quick panel toggle -->


    <!--begin: User Bar -->
    <KTQuickUser></KTQuickUser>
    <!--end: User Bar -->
  </div>
  <!-- end:: Header Topbar -->
</template>

<style lang="scss">
.topbar {
  .dropdown-toggle {
    padding: 0;
    &:hover {
      text-decoration: none;
    }

    &.dropdown-toggle-no-caret {
      &:after {
        content: none;
      }
    }
  }

  .dropdown-menu {
    margin: 0;
    padding: 0;
    outline: none;
    .b-dropdown-text {
      padding: 0;
    }
  }
}
</style>

<script>
import KTQuickUser from "../../QuickUser.vue";

export default {
  name: "KTTopbar",
  data() {
    return {
    };
  },
  components: {
    KTQuickUser
  },
  methods: {
  },
  computed: {
  }
};
</script>
