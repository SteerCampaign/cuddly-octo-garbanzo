---
extends: _layouts.main
title: "Reach Out: Your Mautic Marketing Success Awaits"
description: "Need help with plans or seeking a demo? Our team of sales experts is here to assist. Contact us now for personalized advice and support."
---

@section('body')
<!-- Contact Us -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
        Talk to a Mautic expert
      </h1>
      <p class="mt-1 text-gray-600 dark:text-gray-400">
        Need help picking a plan, want to see a demo, or have questions about our solutions? Our team of sales experts can help.
      </p>
    </div>
  </div>

  <div class="mt-12 max-w-lg mx-auto">
    <!-- Card -->
    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">
      <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
        Please fill in the form
      </h2>
      <style type="text/css" scoped>
        .mauticform-field-hidden { display:none }
      </style>
      <div id="mauticform_wrapper_contactus" class="mauticform_wrapper">
        <form autocomplete="false" role="form" method="post" action="https://engage.steercampaign.com/form/submit?formId=3" id="mauticform_contactus" data-mautic-form="contactus" enctype="multipart/form-data">
          <div class="bg-red-500 text-sm text-white rounded-md p-4 mauticform-error mb-4 hidden" id="mauticform_contactus_error"></div>
          <div class="bg-green-500 text-sm text-white rounded-md p-4 mauticform-message mb-4 hidden" id="mauticform_contactus_message" role="alert"></div>
          <div class="mauticform-innerform">
            <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">
              <div class="grid gap-4 lg:gap-6">
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                  <div id="mauticform_contactus_first_name" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required" data-validate="first_name" data-validation-type="text">
                    <label for="mauticform_input_contactus_first_name" class="block text-sm text-gray-700 font-medium dark:text-white">First Name *</label>
                    <input type="text" name="mauticform[first_name]" value="" id="mauticform_input_contactus_first_name" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;">This is required.</span>
                  </div>

                  <div id="mauticform_contactus_last_name" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required" data-validate="last_name" data-validation-type="text">
                    <label for="mauticform_input_contactus_last_name" class="block text-sm text-gray-700 font-medium dark:text-white">Last Name *</label>
                    <input type="text" name="mauticform[last_name]" value="" id="mauticform_input_contactus_last_name" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;">This is required.</span>
                  </div>
                </div>
                <!-- End Grid -->                      
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                  <div id="mauticform_contactus_email" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required" data-validate="email" data-validation-type="email">
                    <label for="mauticform_input_contactus_email" class="block text-sm text-gray-700 font-medium dark:text-white">Email *</label>
                    <input type="email" name="mauticform[email]" value="" id="mauticform_input_contactus_email" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;">This is required.</span>
                  </div>

                  <div id="mauticform_contactus_phone_number" class="mauticform-row mauticform-tel mauticform-field-4">
                    <label for="mauticform_input_contactus_phone_number" class="block text-sm text-gray-700 font-medium dark:text-white">Phone Number</label>
                    <input type="tel" name="mauticform[phone_number]" value="" id="mauticform_input_contactus_phone_number" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;">This is required.</span>
                  </div>      
                </div>
                <!-- End Grid -->      
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                  <div id="mauticform_contactus_company" class="mauticform-row mauticform-text mauticform-field-5">
                    <label for="mauticform_input_contactus_company" class="block text-sm text-gray-700 font-medium dark:text-white">Company Name</label>
                    <input type="text" name="mauticform[company]" value="" id="mauticform_input_contactus_company" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;"></span>
                  </div>

                  <div id="mauticform_contactus_organization_type" class="mauticform-row mauticform-select mauticform-field-6">
                    <label for="mauticform_input_contactus_organization_type" class="block text-sm text-gray-700 font-medium dark:text-white">Organization Type</label>
                    <select id="mauticform_input_contactus_organization_type" name="mauticform[organization_type]" value="" placeholder="Please Select"  class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">                    <option value="">Please Select</option>                    <option value="Agency">Agency</option>                    <option value="Independent Freelancer/Consultant">Independent Freelancer/Consultant</option>                    <option value="Media/Publishing">Media/Publishing</option>                    <option value="E-commerce">E-commerce</option>                    <option value="Higher Education">Higher Education</option>                    <option value="B2B">B2B</option>                    <option value="B2C">B2C</option>                    <option value="Other">Other</option>
                    </select>                        
                    <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;"></span>
                  </div>
                </div>
                <!-- End Grid -->                      
                <div id="mauticform_contactus_f_message1" data-validate="f_message1" data-validation-type="textarea" class="mauticform-row mauticform-text mauticform-field-7 mauticform-required">
                  <label for="mauticform_input_contactus_f_message1" class="block text-sm text-gray-700 font-medium dark:text-white">Details *</label>
                  <textarea id="mauticform_input_contactus_f_message1" name="mauticform[f_message1]" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"></textarea>
                  <span class="mauticform-errormsg text-sm text-red-600 mt-2" style="display: none;">This is required</span>
                </div>                
                
                <div id="mauticform_contactus_consent" class="flex mauticform-field-8">
                    <input class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" name="mauticform[consent][]" id="mauticform_checkboxgrp_checkbox_consent_agree0" type="checkbox" value="agree" checked>
                    <label id="mauticform_checkboxgrp_label_consent_agree0" for="mauticform_checkboxgrp_checkbox_consent_agree0" class="text-sm text-gray-500 ml-3 dark:text-gray-400">I consent to receiving occasional educational resources, event information and special offers from Steer Campaign. (optional)</label>
                    <span class="mauticform-errormsg" style="display: none;"></span>
                </div>

                <div id="mauticform_contactus_submit" grid class="mauticform-row mauticform-button-wrapper mauticform-field-8">
                  <button type="submit" name="mauticform[submit]" id="mauticform_input_contactus_submit" value="" class="mauticform-button py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2">Submit</button>
                </div>  
            </div>
          </div>
          <input type="hidden" name="mauticform[formId]" id="mauticform_contactus_id" value="3">
          <input type="hidden" name="mauticform[return]" id="mauticform_contactus_return" value="">
          <input type="hidden" name="mauticform[formName]" id="mauticform_contactus_name" value="contactus">
        </form>
      </div>
    </div>
    <!-- End Card -->
  </div>
  </div>
</div>
<!-- End Contact Us -->

@endsection