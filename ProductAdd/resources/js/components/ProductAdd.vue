<template>
    <form @submit.prevent="submit">
        <div class="form-group">
            <label for="prodname">Product Name</label>
            <input type="text" class="form-control" name="prodname" id="prodname" v-model="fields.prodname" />
            <div v-if="errors && errors.prodname" class="text-danger">{{ errors.prodname[0] }}</div>
        </div>

        <div class="form-group">
            <label for="proddesc">Description</label>
            <textarea class="form-control" name="proddesc" id="proddesc" rows="5" v-model="fields.proddesc"></textarea>
            <div v-if="errors && errors.proddesc" class="text-danger">{{ errors.proddesc[0] }}</div>
        </div>

        <div class="form-group">
            <label for="prodprice">Price</label>
            <input type="number" class="form-control" name="prodprice" id="prodprice"  v-model="fields.prodprice" />
            <div v-if="errors && errors.prodprice" class="text-danger">{{ errors.prodprice[0] }}</div>
        </div>

        <div v-if="productCategory == 'cars'">
            <div class="form-group">
                <label for="prodweight">Weight</label>
                <input type="text" class="form-control" name="prodweight" id="prodweight" v-model="fields.prodweight" />
                <div v-if="errors && errors.prodweight" class="text-danger">{{ errors.prodweight[0] }}</div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</template>

<script>
import FormMixin from '../FormMixin';

export default {
  mixins: [ FormMixin ],

  data() {
    return {
      'action': '/submit',
      'productCategory': 'cars',
    //   'customFields': ['weight','color']
    }
  }
}
</script>