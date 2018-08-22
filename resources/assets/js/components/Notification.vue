<template>
       <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Notifications <span class="glyphicon glyphicon-bell"></span> <span class="badge badge-success" >{{ notifications.length }}

                                 </span>
                                </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"  >
                                    <a class="dropdown-item" v-for="notification in notifications" href="" >                            {{notification.data}}
</a>
                                     
                                    

                                   
                                </div>
                            </li>
</template>

<script>
export default {
  props:['notifications'],

}
</script>

<style>

</style>
