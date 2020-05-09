<!-- BASIC CARD TITLE PAGE -->
<div class="card-wrapper">
  <article class="heading heading-display-1">
    <!-- HEADER DISPLAY 1 -->
    <header class="heading-header">
      <h2 class="heading-subtitle">heading-form</h2>
      <h1 class="heading-title">Drupal webform elements</h1>
    </header>
  </article>
</div>

<section class="card card-form card-dark">
  <div class="card-body">
    <form class="webform-submission-form webform-submission-add-form webform-submission-example_elements-form webform-submission-example_elements-add-form js-webform-details-toggle webform-details-toggle contextual-region form"
      data-drupal-selector="webform-submission-example-elements-add-form" enctype="multipart/form-data" action="/fr/webform/example_elements"
      method="post" id="webform-submission-example-elements-add-form" accept-charset="UTF-8">

      <details data-webform-key="basic_elements" data-drupal-selector="edit-basic-elements" id="edit-basic-elements" class="js-form-wrapper form-wrapper"
        open="open">
        <summary role="button" aria-controls="edit-basic-elements" aria-expanded="true" aria-pressed="true">Basic elements</summary>


        <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-checkbox form-item-checkbox">
          <label for="edit-checkbox" class="option js-form-required form-required custom-control custom-checkbox">

            <input data-drupal-selector="edit-checkbox" aria-describedby="edit-checkbox--description" type="checkbox" id="edit-checkbox"
              name="checkbox" value="1" class="form-checkbox required custom-control-input" required="required" aria-required="true">

            <span class="custom-control-indicator"></span>

            Checkbox</label>
          <small id="edit-checkbox--description" class="description form-text text-muted">
            This is a description
          </small>
        </div>


        <input data-drupal-selector="edit-hidden" type="hidden" name="hidden" value="">



        <div class="form-group js-form-item form-item js-form-type-password form-type-password js-form-item-password form-item-password">
          <label for="edit-password" class="js-form-required form-required">Password</label>


          <input data-drupal-selector="edit-password" type="password" id="edit-password" name="password" size="60" maxlength="128"
            class="form-text required form-control" required="required" aria-required="true">



        </div>

        <div class="form-group js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-textarea form-item-textarea">
          <label for="edit-textarea" class="js-form-required form-required">Textarea</label>
          <div>
            <textarea data-drupal-selector="edit-textarea" id="edit-textarea" name="textarea" rows="5" cols="60" class="form-textarea required form-control"
              required="required" aria-required="true"></textarea>
          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-textfield form-item-textfield form-no-label">
          <label for="edit-textfield" class="visually-hidden js-form-required form-required">Text field</label>
          <input data-drupal-selector="edit-textfield" type="text" id="edit-textfield" name="textfield" value="" size="60" maxlength="255"
            placeholder="Textfield" class="form-text required form-control" required="required" aria-required="true">
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-textfield-multiple form-item-textfield-multiple">
          <label for="edit-textfield-multiple" class="js-form-required form-required">Text field multiple</label>
          <div id="textfield_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-textfield-multiple-items" id="edit-textfield-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-textfield-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-textfield-multiple-items-0--item- form-item-textfield-multiple-items-0--item- form-no-label">
                      <label for="edit-textfield-multiple-items-0-item-" class="visually-hidden">Text field multiple</label>


                      <input data-drupal-selector="edit-textfield-multiple-items-0-item-" type="text" id="edit-textfield-multiple-items-0-item-"
                        name="textfield_multiple[items][0][_item_]" value="" size="60" maxlength="255" class="form-text form-control">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-textfield-multiple-items-0-weight form-item-textfield-multiple-items-0-weight form-no-label">
                      <label for="edit-textfield-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-textfield-multiple-items-0-weight"
                        type="number" id="edit-textfield-multiple-items-0-weight" name="textfield_multiple[items][0][weight]"
                        value="0" step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-textfield-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image"
                      id="edit-textfield-multiple-items-0-operations-add" name="textfield_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg"
                      alt="Ajouter" title="Ajouter" class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-textfield-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image"
                      id="edit-textfield-multiple-items-0-operations-remove" name="textfield_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg"
                      alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-textfield-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-textfield-multiple-add-submit"
              name="textfield_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-textfield-multiple-add-more-items form-item-textfield-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-textfield-multiple-add-more-items" type="number" id="edit-textfield-multiple-add-more-items"
                name="textfield_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>


      </details>
      <details data-webform-key="advanced_elements" data-drupal-selector="edit-advanced-elements" id="edit-advanced-elements" class="js-form-wrapper form-wrapper"
        open="open">
        <summary role="button" aria-controls="edit-advanced-elements" aria-expanded="true" aria-pressed="true">Advanced elements</summary>


        <div class="form-group js-form-item form-item js-form-type-webform-autocomplete form-type-webform-autocomplete js-form-item-webform-autocomplete form-item-webform-autocomplete">
          <label for="edit-webform-autocomplete">Autocomplete</label>


          <input data-drupal-selector="edit-webform-autocomplete" class="form-autocomplete form-text webform-autocomplete form-control"
            data-autocomplete-path="/fr/webform/example_elements/autocomplete/webform_autocomplete" type="text" id="edit-webform-autocomplete"
            name="webform_autocomplete" value="" size="60" maxlength="255">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-webform-autocomplete-multiple form-item-webform-autocomplete-multiple">
          <label for="edit-webform-autocomplete-multiple">Autocomplete multiple</label>
          <div id="webform_autocomplete_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-webform-autocomplete-multiple-items" id="edit-webform-autocomplete-multiple-items"
              class="responsive-enabled" data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-webform-autocomplete-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-webform-autocomplete form-type-webform-autocomplete js-form-item-webform-autocomplete-multiple-items-0--item- form-item-webform-autocomplete-multiple-items-0--item- form-no-label">
                      <label for="edit-webform-autocomplete-multiple-items-0-item-" class="visually-hidden">Autocomplete multiple</label>


                      <input data-drupal-selector="edit-webform-autocomplete-multiple-items-0-item-" class="form-autocomplete form-text webform-autocomplete form-control"
                        data-autocomplete-path="/fr/webform/example_elements/autocomplete/webform_autocomplete_multiple" type="text"
                        id="edit-webform-autocomplete-multiple-items-0-item-" name="webform_autocomplete_multiple[items][0][_item_]"
                        value="" size="60" maxlength="255">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-webform-autocomplete-multiple-items-0-weight form-item-webform-autocomplete-multiple-items-0-weight form-no-label">
                      <label for="edit-webform-autocomplete-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-webform-autocomplete-multiple-items-0-weight"
                        type="number" id="edit-webform-autocomplete-multiple-items-0-weight" name="webform_autocomplete_multiple[items][0][weight]"
                        value="0" step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-webform-autocomplete-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image"
                      id="edit-webform-autocomplete-multiple-items-0-operations-add" name="webform_autocomplete_multiple_table_add_0"
                      src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter" class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-webform-autocomplete-multiple-items-0-operations-remove" formnovalidate="formnovalidate"
                      type="image" id="edit-webform-autocomplete-multiple-items-0-operations-remove" name="webform_autocomplete_multiple_table_remove_0"
                      src="/modules/webform/images/icons/ex.svg" alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-webform-autocomplete-multiple-add-submit" formnovalidate="formnovalidate" type="submit"
              id="edit-webform-autocomplete-multiple-add-submit" name="webform_autocomplete_multiple_table_add" value="Ajouter"
              class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-webform-autocomplete-multiple-add-more-items form-item-webform-autocomplete-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-webform-autocomplete-multiple-add-more-items" type="number" id="edit-webform-autocomplete-multiple-add-more-items"
                name="webform_autocomplete_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-codemirror form-type-webform-codemirror js-form-item-webform-codemirror form-item-webform-codemirror">
          <label for="edit-webform-codemirror">CodeMirror</label>
          <div>
            <textarea data-drupal-selector="edit-webform-codemirror" class="js-webform-codemirror webform-codemirror yaml form-textarea form-control"
              data-webform-codemirror-mode="text/x-yaml" id="edit-webform-codemirror" name="webform_codemirror" rows="5" cols="60"></textarea>
          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-color form-type-color js-form-item-color form-item-color">
          <label for="edit-color">Color</label>


          <input class="form-color-medium form-color" title="Hexadecimal color" pattern="#[a-f0-9]{6}" placeholder="#000000" data-drupal-selector="edit-color"
            type="color" id="edit-color" name="color" value="">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-creditcard-number form-type-webform-creditcard-number js-form-item-webform-creditcard-number form-item-webform-creditcard-number">
          <label for="edit-webform-creditcard-number">Credit card number</label>


          <input data-drupal-selector="edit-webform-creditcard-number" type="text" id="edit-webform-creditcard-number" name="webform_creditcard_number"
            value="" size="16" maxlength="16" class="form-text webform-creditcard-number form-control">



        </div>

        <div class="form-group js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
          <label for="edit-email">Email</label>


          <input data-drupal-selector="edit-email" type="email" id="edit-email" name="email" value="" size="60" maxlength="254" class="form-email form-control">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-email-multiple form-item-email-multiple">
          <label for="edit-email-multiple">Email multiple</label>
          <div id="email_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-email-multiple-items" id="edit-email-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-email-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-email form-type-email js-form-item-email-multiple-items-0--item- form-item-email-multiple-items-0--item- form-no-label">
                      <label for="edit-email-multiple-items-0-item-" class="visually-hidden">Email multiple</label>


                      <input data-drupal-selector="edit-email-multiple-items-0-item-" type="email" id="edit-email-multiple-items-0-item-" name="email_multiple[items][0][_item_]"
                        value="" size="60" maxlength="254" class="form-email form-control">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-email-multiple-items-0-weight form-item-email-multiple-items-0-weight form-no-label">
                      <label for="edit-email-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-email-multiple-items-0-weight"
                        type="number" id="edit-email-multiple-items-0-weight" name="email_multiple[items][0][weight]" value="0"
                        step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-email-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image" id="edit-email-multiple-items-0-operations-add"
                      name="email_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter"
                      class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-email-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image"
                      id="edit-email-multiple-items-0-operations-remove" name="email_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg"
                      alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-email-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-email-multiple-add-submit"
              name="email_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-email-multiple-add-more-items form-item-email-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-email-multiple-add-more-items" type="number" id="edit-email-multiple-add-more-items" name="email_multiple[add][more_items]"
                value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-email-confirm form-type-webform-email-confirm js-form-item-webform-email-confirm form-item-webform-email-confirm form-no-label">

          <div class="form-group js-form-item form-item js-form-type-email form-type-email js-form-item-webform-email-confirm-mail-1 form-item-webform-email-confirm-mail-1">
            <label for="edit-webform-email-confirm-mail-1">Email confirm</label>


            <input data-drupal-selector="edit-webform-email-confirm-mail-1" class="webform-email form-email form-control" type="email"
              id="edit-webform-email-confirm-mail-1" name="webform_email_confirm[mail_1]" value="" size="60" maxlength="254">



          </div>

          <div class="form-group js-form-item form-item js-form-type-email form-type-email js-form-item-webform-email-confirm-mail-2 form-item-webform-email-confirm-mail-2">
            <label for="edit-webform-email-confirm-mail-2">Confirm email</label>


            <input data-drupal-selector="edit-webform-email-confirm-mail-2" class="webform-email-confirm form-email form-control" type="email"
              id="edit-webform-email-confirm-mail-2" name="webform_email_confirm[mail_2]" value="" size="60" maxlength="254">



          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-email-multiple form-type-webform-email-multiple js-form-item-webform-email-multiple form-item-webform-email-multiple">
          <label for="edit-webform-email-multiple">Email multiple</label>


          <input data-drupal-selector="edit-webform-email-multiple" aria-describedby="edit-webform-email-multiple--description" type="text"
            id="edit-webform-email-multiple" name="webform_email_multiple" value="" size="60" class="form-text webform-email-multiple form-control">



          <small id="edit-webform-email-multiple--description" class="description form-text text-muted">
            Multiple email addresses may be separated by commas.
          </small>
        </div>

        <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-number form-item-number">
          <label for="edit-number">Number</label>


          <input data-drupal-selector="edit-number" type="number" id="edit-number" name="number" value="" step="1" min="0" max="10"
            class="form-number form-control">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-number-multiple form-item-number-multiple">
          <label for="edit-number-multiple">Number multiple</label>
          <div id="number_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-number-multiple-items" id="edit-number-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-number-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-number-multiple-items-0--item- form-item-number-multiple-items-0--item- form-no-label">
                      <label for="edit-number-multiple-items-0-item-" class="visually-hidden">Number multiple</label>


                      <input data-drupal-selector="edit-number-multiple-items-0-item-" type="number" id="edit-number-multiple-items-0-item-" name="number_multiple[items][0][_item_]"
                        value="" step="1" min="0" max="10" class="form-number form-control">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-number-multiple-items-0-weight form-item-number-multiple-items-0-weight form-no-label">
                      <label for="edit-number-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-number-multiple-items-0-weight"
                        type="number" id="edit-number-multiple-items-0-weight" name="number_multiple[items][0][weight]" value="0"
                        step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-number-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image" id="edit-number-multiple-items-0-operations-add"
                      name="number_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter"
                      class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-number-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image"
                      id="edit-number-multiple-items-0-operations-remove" name="number_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg"
                      alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-number-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-number-multiple-add-submit"
              name="number_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-number-multiple-add-more-items form-item-number-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-number-multiple-add-more-items" type="number" id="edit-number-multiple-add-more-items"
                name="number_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div id="edit-password-confirm" class="form-group js-form-item form-item js-form-type-password-confirm form-type-password-confirm js-form-item-password-confirm form-item-password-confirm">
          <label for="edit-password-confirm">Password confirm</label>

          <div class="form-group js-form-item form-item js-form-type-password form-type-password js-form-item-password-confirm-pass1 form-item-password-confirm-pass1">
            <label for="edit-password-confirm-pass1">Mot de passe</label>


            <input class="password-field js-password-field form-text form-control" data-drupal-selector="edit-password-confirm-pass1"
              type="password" id="edit-password-confirm-pass1" name="password_confirm[pass1]" size="60" maxlength="128">



          </div>

          <div class="form-group js-form-item form-item js-form-type-password form-type-password js-form-item-password-confirm-pass2 form-item-password-confirm-pass2">
            <label for="edit-password-confirm-pass2">Confirmer le mot de passe</label>


            <input class="password-confirm js-password-confirm form-text form-control" data-drupal-selector="edit-password-confirm-pass2"
              type="password" id="edit-password-confirm-pass2" name="password_confirm[pass2]" size="60" maxlength="128">



          </div>

          <small id="edit-password-confirm--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/1427838">Issue #1427838: password and password_confirm children do not pick up #states or #attributes</a>
          </small>
        </div>

        <div class="js-form-type-range-output form-type-range-output form-group js-form-item form-item js-form-type-range form-type-range js-form-item-range form-item-range">
          <label for="edit-range">Range</label>


          <input data-range-output="true" class="js-form-range-output form-range-output form-range" data-range-output-prefix="$" data-range-output-suffix=".00"
            data-drupal-selector="edit-range" type="range" id="edit-range" name="range" value="" step="1" min="0" max="100">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-rating form-type-webform-rating js-form-item-webform-rating form-item-webform-rating">
          <label for="edit-webform-rating">Rating</label>


          <input data-drupal-selector="edit-webform-rating" type="range" id="edit-webform-rating" name="webform_rating" value="0" step="1"
            min="0" max="5" class="form-webform-rating">
          <div class="rateit svg rateit-medium" data-rateit-min="0" data-rateit-max="5" data-rateit-step="1" data-rateit-resetable="false"
            data-rateit-readonly="false" data-rateit-backingfld="#edit-webform-rating" data-rateit-value="" data-rateit-starheight="24"
            data-rateit-starwidth="24"></div>




        </div>

        <div class="form-group js-form-item form-item js-form-type-search form-type-search js-form-item-search form-item-search">
          <label for="edit-search">Search</label>


          <input data-drupal-selector="edit-search" type="search" id="edit-search" name="search" value="" size="60" maxlength="128"
            class="form-search form-control">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-signature form-type-webform-signature js-form-item-webform-signature form-item-webform-signature">
          <label for="edit-webform-signature">Signature</label>


          <input data-drupal-selector="edit-webform-signature" aria-describedby="edit-webform-signature--description" type="hidden"
            name="webform_signature" value="" class="js-webform-signature form-webform-signature">
          <div class="js-webform-signature-pad webform-signature-pad">

            <input type="submit" name="op" value="Reset" class="button js-form-submit form-submit">


            <canvas></canvas>
          </div>



          <small id="edit-webform-signature--description" class="description form-text text-muted">
            Sign above
          </small>
        </div>

        <div class="form-group js-form-item form-item js-form-type-tel form-type-tel js-form-item-tel form-item-tel">
          <label for="edit-tel">Telephone</label>


          <input class="js-webform-telephone-international webform-webform-telephone-international form-tel form-control" data-drupal-selector="edit-tel"
            type="tel" id="edit-tel" name="tel" value="" size="30" maxlength="128">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-tel-multiple form-item-tel-multiple">
          <label for="edit-tel-multiple">Telephone multiple</label>
          <div id="tel_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-tel-multiple-items" id="edit-tel-multiple-items" class="responsive-enabled" data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-tel-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-tel form-type-tel js-form-item-tel-multiple-items-0--item- form-item-tel-multiple-items-0--item- form-no-label">
                      <label for="edit-tel-multiple-items-0-item-" class="visually-hidden">Telephone multiple</label>


                      <input class="js-webform-telephone-international webform-webform-telephone-international form-tel form-control" data-drupal-selector="edit-tel-multiple-items-0-item-"
                        type="tel" id="edit-tel-multiple-items-0-item-" name="tel_multiple[items][0][_item_]" value="" size="30"
                        maxlength="128">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-tel-multiple-items-0-weight form-item-tel-multiple-items-0-weight form-no-label">
                      <label for="edit-tel-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-tel-multiple-items-0-weight"
                        type="number" id="edit-tel-multiple-items-0-weight" name="tel_multiple[items][0][weight]" value="0"
                        step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-tel-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image" id="edit-tel-multiple-items-0-operations-add"
                      name="tel_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter"
                      class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-tel-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image" id="edit-tel-multiple-items-0-operations-remove"
                      name="tel_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg" alt="Retirer" title="Retirer"
                      class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-tel-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-tel-multiple-add-submit"
              name="tel_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-tel-multiple-add-more-items form-item-tel-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-tel-multiple-add-more-items" type="number" id="edit-tel-multiple-add-more-items" name="tel_multiple[add][more_items]"
                value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-toggle form-type-webform-toggle js-form-item-webform-toggle form-item-webform-toggle">


          <input data-drupal-selector="edit-webform-toggle" type="checkbox" id="edit-webform-toggle" name="webform_toggle" value="1"
            class="form-checkbox custom-control-input">
          <div class="js-webform-toggle webform-toggle toggle toggle-medium toggle-light" data-toggle-height="24" data-toggle-width="48"
            data-toggle-text-on="" data-toggle-text-off=""></div>




          <label for="edit-webform-toggle" class="option">Toggle</label>
        </div>

        <div class="form-group js-form-item form-item js-form-type-url form-type-url js-form-item-url form-item-url">
          <label for="edit-url">URL</label>


          <input data-drupal-selector="edit-url" type="url" id="edit-url" name="url" value="" size="60" maxlength="255" class="form-url form-control">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-url-multiple form-item-url-multiple">
          <label for="edit-url-multiple">URL multiple</label>
          <div id="url_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-url-multiple-items" id="edit-url-multiple-items" class="responsive-enabled" data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-url-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-url form-type-url js-form-item-url-multiple-items-0--item- form-item-url-multiple-items-0--item- form-no-label">
                      <label for="edit-url-multiple-items-0-item-" class="visually-hidden">URL multiple</label>


                      <input data-drupal-selector="edit-url-multiple-items-0-item-" type="url" id="edit-url-multiple-items-0-item-" name="url_multiple[items][0][_item_]"
                        value="" size="60" maxlength="255" class="form-url form-control">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-url-multiple-items-0-weight form-item-url-multiple-items-0-weight form-no-label">
                      <label for="edit-url-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-url-multiple-items-0-weight"
                        type="number" id="edit-url-multiple-items-0-weight" name="url_multiple[items][0][weight]" value="0"
                        step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-url-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image" id="edit-url-multiple-items-0-operations-add"
                      name="url_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter"
                      class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-url-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image" id="edit-url-multiple-items-0-operations-remove"
                      name="url_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg" alt="Retirer" title="Retirer"
                      class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-url-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-url-multiple-add-submit"
              name="url_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-url-multiple-add-more-items form-item-url-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-url-multiple-add-more-items" type="number" id="edit-url-multiple-add-more-items" name="url_multiple[add][more_items]"
                value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>


      </details>
      <details data-webform-key="markup_elements" data-drupal-selector="edit-markup-elements" id="edit-markup-elements" class="js-form-wrapper form-wrapper"
        open="open">
        <summary role="button" aria-controls="edit-markup-elements" aria-expanded="true" aria-pressed="true">Markup elements</summary>


        <div id="edit-processed-text" class="form-group js-form-item form-item js-form-type-processed-text form-type-processed-text js-form-item- form-item-">
          <label for="edit-processed-text">Advanced HTML/Text</label>

          <div id="edit-processed-text-content" class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item- form-no-label">
            This is a Advanced HTML/Text container.
          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item-">
          <label for="edit-webform-markup">Basic HTML</label>

          <div id="edit-webform-markup-content" class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item- form-no-label">
            This is a Basic HTML container.
          </div>

          <small id="edit-webform-markup--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/2700667">Issue #2700667: Notice: Undefined index: #type in drupal_process_states()</a>
          </small>
        </div>


      </details>
      <details data-webform-key="file_upload_elements" data-drupal-selector="edit-file-upload-elements" id="edit-file-upload-elements"
        class="js-form-wrapper form-wrapper" open="open">
        <summary role="button" aria-controls="edit-file-upload-elements" aria-expanded="true" aria-pressed="true">File upload elements</summary>

        <div id="ajax-wrapper">
          <div class="form-group js-form-item form-item js-form-type-webform-audio-file form-type-webform-audio-file js-form-item-webform-audio-file form-item-webform-audio-file">
            <label for="edit-webform-audio-file-upload">Audio file</label>

            <div id="edit-webform-audio-file-upload" class="js-webform-audio-file webform-audio-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper">
                <label class="custom-file">

                  <input data-drupal-selector="edit-webform-audio-file-upload" accept="audio/*" type="file" id="edit-webform-audio-file-upload"
                    name="files[webform_audio_file]" size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-audio-file-upload-button" formnovalidate="formnovalidate"
                  type="submit" id="edit-webform-audio-file-upload-button" name="webform_audio_file_upload_button" value="Transférer">




                <input data-drupal-selector="edit-webform-audio-file-fids" type="hidden" name="webform_audio_file[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un seul fichier.
                <br>Limité à 2 Mo.
                <br>Types autorisés : mp3 ogg wav.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--2">
          <div class="form-group js-form-item form-item js-form-type-webform-audio-file form-type-webform-audio-file js-form-item-webform-audio-file-multiple form-item-webform-audio-file-multiple">
            <label for="edit-webform-audio-file-multiple-upload">Audio file multiple</label>

            <div id="edit-webform-audio-file-multiple-upload" class="js-webform-audio-file webform-audio-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--2">
                <label class="custom-file">

                  <input multiple="multiple" accept="audio/*" type="file" id="edit-webform-audio-file-multiple-upload" name="files[webform_audio_file_multiple][]"
                    size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-audio-file-multiple-upload-button"
                  formnovalidate="formnovalidate" type="submit" id="edit-webform-audio-file-multiple-upload-button" name="webform_audio_file_multiple_upload_button"
                  value="Transférer">




                <input data-drupal-selector="edit-webform-audio-file-multiple-fids" type="hidden" name="webform_audio_file_multiple[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un nombre illimité de fichiers peuvent être transférés dans ce champ.
                <br>Limité à 2 Mo.
                <br>Types autorisés : mp3 ogg wav.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--3">
          <div class="form-group js-form-item form-item js-form-type-webform-document-file form-type-webform-document-file js-form-item-webform-document-file form-item-webform-document-file">
            <label for="edit-webform-document-file-upload">Document file</label>

            <div id="edit-webform-document-file-upload" class="js-webform-document-file webform-document-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--3">
                <label class="custom-file">

                  <input data-drupal-selector="edit-webform-document-file-upload" type="file" id="edit-webform-document-file-upload" name="files[webform_document_file]"
                    size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-document-file-upload-button"
                  formnovalidate="formnovalidate" type="submit" id="edit-webform-document-file-upload-button" name="webform_document_file_upload_button"
                  value="Transférer">




                <input data-drupal-selector="edit-webform-document-file-fids" type="hidden" name="webform_document_file[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un seul fichier.
                <br>Limité à 2 Mo.
                <br>Types autorisés : txt rtf pdf doc docx odt ppt pptx odp xls xlsx ods.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--4">
          <div class="form-group js-form-item form-item js-form-type-webform-document-file form-type-webform-document-file js-form-item-webform-document-file-multiple form-item-webform-document-file-multiple">
            <label for="edit-webform-document-file-multiple-upload">Document file multiple</label>

            <div id="edit-webform-document-file-multiple-upload" class="js-webform-document-file webform-document-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--4">
                <label class="custom-file">

                  <input multiple="multiple" type="file" id="edit-webform-document-file-multiple-upload" name="files[webform_document_file_multiple][]"
                    size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-document-file-multiple-upload-button"
                  formnovalidate="formnovalidate" type="submit" id="edit-webform-document-file-multiple-upload-button" name="webform_document_file_multiple_upload_button"
                  value="Transférer">




                <input data-drupal-selector="edit-webform-document-file-multiple-fids" type="hidden" name="webform_document_file_multiple[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un nombre illimité de fichiers peuvent être transférés dans ce champ.
                <br>Limité à 2 Mo.
                <br>Types autorisés : txt rtf pdf doc docx odt ppt pptx odp xls xlsx ods.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--5">
          <div class="form-group js-form-item form-item js-form-type-managed-file form-type-managed-file js-form-item-managed-file form-item-managed-file">
            <label for="edit-managed-file-upload">File</label>

            <div id="edit-managed-file-upload" class="js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--5">
                <label class="custom-file">

                  <input data-drupal-selector="edit-managed-file-upload" type="file" id="edit-managed-file-upload" name="files[managed_file]"
                    size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-managed-file-upload-button" formnovalidate="formnovalidate"
                  type="submit" id="edit-managed-file-upload-button" name="managed_file_upload_button" value="Transférer">




                <input data-drupal-selector="edit-managed-file-fids" type="hidden" name="managed_file[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un seul fichier.
                <br>Limité à 2 Mo.
                <br>Types autorisés : gif jpg png bmp eps tif pict psd txt rtf html odf pdf doc docx ppt pptx xls xlsx xml avi
                mov mp3 ogg wav bz2 dmg gz jar rar sit svg tar zip.
              </div>
            </small>
            <small id="edit-managed-file-upload--description" class="description form-text text-muted">
              <b>Known Issues:</b>
              <br>
              <a href="https://www.drupal.org/node/2705471">Issue #2705471: Webform states managed file fields</a>
              <br>
              <a href="https://www.drupal.org/node/2113931">Issue #2113931: File Field design update</a>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--6">
          <div class="form-group js-form-item form-item js-form-type-managed-file form-type-managed-file js-form-item-managed-file-multiple form-item-managed-file-multiple">
            <label for="edit-managed-file-multiple-upload">File multiple</label>

            <div id="edit-managed-file-multiple-upload" class="js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--6">
                <label class="custom-file">

                  <input multiple="multiple" type="file" id="edit-managed-file-multiple-upload" name="files[managed_file_multiple][]" size="22"
                    class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-managed-file-multiple-upload-button"
                  formnovalidate="formnovalidate" type="submit" id="edit-managed-file-multiple-upload-button" name="managed_file_multiple_upload_button"
                  value="Transférer">




                <input data-drupal-selector="edit-managed-file-multiple-fids" type="hidden" name="managed_file_multiple[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un nombre illimité de fichiers peuvent être transférés dans ce champ.
                <br>Limité à 2 Mo.
                <br>Types autorisés : gif jpg png bmp eps tif pict psd txt rtf html odf pdf doc docx ppt pptx xls xlsx xml avi
                mov mp3 ogg wav bz2 dmg gz jar rar sit svg tar zip.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--7">
          <div class="form-group js-form-item form-item js-form-type-webform-image-file form-type-webform-image-file js-form-item-webform-image-file form-item-webform-image-file">
            <label for="edit-webform-image-file-upload">Image file</label>

            <div id="edit-webform-image-file-upload" class="js-webform-image-file webform-image-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--7">
                <label class="custom-file">

                  <input data-drupal-selector="edit-webform-image-file-upload" accept="image/*" type="file" id="edit-webform-image-file-upload"
                    name="files[webform_image_file]" size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-image-file-upload-button" formnovalidate="formnovalidate"
                  type="submit" id="edit-webform-image-file-upload-button" name="webform_image_file_upload_button" value="Transférer">




                <input data-drupal-selector="edit-webform-image-file-fids" type="hidden" name="webform_image_file[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un seul fichier.
                <br>Limité à 2 Mo.
                <br>Types autorisés : gif jpg png svg.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--8">
          <div class="form-group js-form-item form-item js-form-type-webform-image-file form-type-webform-image-file js-form-item-webform-image-file-multiple form-item-webform-image-file-multiple">
            <label for="edit-webform-image-file-multiple-upload">Image file multiple</label>

            <div id="edit-webform-image-file-multiple-upload" class="js-webform-image-file webform-image-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--8">
                <label class="custom-file">

                  <input multiple="multiple" accept="image/*" type="file" id="edit-webform-image-file-multiple-upload" name="files[webform_image_file_multiple][]"
                    size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-image-file-multiple-upload-button"
                  formnovalidate="formnovalidate" type="submit" id="edit-webform-image-file-multiple-upload-button" name="webform_image_file_multiple_upload_button"
                  value="Transférer">




                <input data-drupal-selector="edit-webform-image-file-multiple-fids" type="hidden" name="webform_image_file_multiple[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un nombre illimité de fichiers peuvent être transférés dans ce champ.
                <br>Limité à 2 Mo.
                <br>Types autorisés : gif jpg png svg.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--9">
          <div class="form-group js-form-item form-item js-form-type-webform-video-file form-type-webform-video-file js-form-item-webform-video-file form-item-webform-video-file">
            <label for="edit-webform-video-file-upload">Video file</label>

            <div id="edit-webform-video-file-upload" class="js-webform-video-file webform-video-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--9">
                <label class="custom-file">

                  <input data-drupal-selector="edit-webform-video-file-upload" accept="video/*" type="file" id="edit-webform-video-file-upload"
                    name="files[webform_video_file]" size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-video-file-upload-button" formnovalidate="formnovalidate"
                  type="submit" id="edit-webform-video-file-upload-button" name="webform_video_file_upload_button" value="Transférer">




                <input data-drupal-selector="edit-webform-video-file-fids" type="hidden" name="webform_video_file[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un seul fichier.
                <br>Limité à 2 Mo.
                <br>Types autorisés : avi mov mp4 ogg wav webm.
              </div>
            </small>
          </div>
        </div>
        <div id="ajax-wrapper--10">
          <div class="form-group js-form-item form-item js-form-type-webform-video-file form-type-webform-video-file js-form-item-webform-video-file-multiple form-item-webform-video-file-multiple">
            <label for="edit-webform-video-file-multiple-upload">Video file multiple</label>

            <div id="edit-webform-video-file-multiple-upload" class="js-webform-video-file webform-video-file js-form-managed-file form-managed-file">
              <div id="ajax-wrapper--10">
                <label class="custom-file">

                  <input multiple="multiple" accept="video/*" type="file" id="edit-webform-video-file-multiple-upload" name="files[webform_video_file_multiple][]"
                    size="22" class="js-form-file form-file custom-file-input">


                  <span class="custom-file-control"></span>
                </label>


                <input class="js-hide button js-form-submit form-submit" data-drupal-selector="edit-webform-video-file-multiple-upload-button"
                  formnovalidate="formnovalidate" type="submit" id="edit-webform-video-file-multiple-upload-button" name="webform_video_file_multiple_upload_button"
                  value="Transférer">




                <input data-drupal-selector="edit-webform-video-file-multiple-fids" type="hidden" name="webform_video_file_multiple[fids]">


              </div>
            </div>

            <small class="form-text text-muted">
              <div class="description">Un nombre illimité de fichiers peuvent être transférés dans ce champ.
                <br>Limité à 2 Mo.
                <br>Types autorisés : avi mov mp4 ogg wav webm.
              </div>
            </small>
          </div>
        </div>

      </details>
      <details data-webform-key="options_elements" data-drupal-selector="edit-options-elements" id="edit-options-elements" class="js-form-wrapper form-wrapper"
        open="open">
        <summary role="button" aria-controls="edit-options-elements" aria-expanded="true" aria-pressed="true">Options elements</summary>

        <fieldset data-drupal-selector="edit-webform-buttons" class="js-webform-buttons webform-buttons fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper"
          id="edit-webform-buttons--wrapper">
          <legend>
            <span class="fieldset-legend">Buttons</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-webform-buttons" class="js-webform-webform_buttons webform-options-display-side-by-side">
              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons form-item-webform-buttons">
                <label for="edit-webform-buttons-one" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-buttons-one" type="radio" id="edit-webform-buttons-one" name="webform_buttons"
                    value="one" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  One</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons form-item-webform-buttons">
                <label for="edit-webform-buttons-two" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-buttons-two" type="radio" id="edit-webform-buttons-two" name="webform_buttons"
                    value="two" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Two</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons form-item-webform-buttons">
                <label for="edit-webform-buttons-three" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-buttons-three" type="radio" id="edit-webform-buttons-three" name="webform_buttons"
                    value="three" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Three</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons form-item-webform-buttons">
                <label for="edit-webform-buttons-four" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-buttons-four" type="radio" id="edit-webform-buttons-four" name="webform_buttons"
                    value="four" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Four</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons form-item-webform-buttons">
                <label for="edit-webform-buttons-five" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-buttons-five" type="radio" id="edit-webform-buttons-five" name="webform_buttons"
                    value="five" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Five</label>
              </div>
            </div>

          </div>
        </fieldset>

        <div class="js-webform-buttons-other webform-buttons-other form-group js-form-item form-item js-form-type-webform-buttons-other form-type-webform-buttons-other js-form-item-webform-buttons-other form-item-webform-buttons-other">
          <label>Buttons other</label>
          <div id="edit-webform-buttons-other-buttons" class="js-webform-webform_buttons webform-options-display-side-by-side">
            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons-other-buttons form-item-webform-buttons-other-buttons">
              <label for="edit-webform-buttons-other-buttons-one" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-buttons-other-buttons-one" type="radio" id="edit-webform-buttons-other-buttons-one"
                  name="webform_buttons_other[buttons]" value="one" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                One</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons-other-buttons form-item-webform-buttons-other-buttons">
              <label for="edit-webform-buttons-other-buttons-two" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-buttons-other-buttons-two" type="radio" id="edit-webform-buttons-other-buttons-two"
                  name="webform_buttons_other[buttons]" value="two" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Two</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons-other-buttons form-item-webform-buttons-other-buttons">
              <label for="edit-webform-buttons-other-buttons-three" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-buttons-other-buttons-three" type="radio" id="edit-webform-buttons-other-buttons-three"
                  name="webform_buttons_other[buttons]" value="three" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Three</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons-other-buttons form-item-webform-buttons-other-buttons">
              <label for="edit-webform-buttons-other-buttons-four" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-buttons-other-buttons-four" type="radio" id="edit-webform-buttons-other-buttons-four"
                  name="webform_buttons_other[buttons]" value="four" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Four</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons-other-buttons form-item-webform-buttons-other-buttons">
              <label for="edit-webform-buttons-other-buttons-five" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-buttons-other-buttons-five" type="radio" id="edit-webform-buttons-other-buttons-five"
                  name="webform_buttons_other[buttons]" value="five" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Five</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-buttons-other-buttons form-item-webform-buttons-other-buttons">
              <label for="edit-webform-buttons-other-buttons-other-" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-buttons-other-buttons-other-" type="radio" id="edit-webform-buttons-other-buttons-other-"
                  name="webform_buttons_other[buttons]" value="_other_" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Autre...</label>
            </div>
          </div>

          <div class="js-webform-buttons-other-input webform-buttons-other-input form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-webform-buttons-other-other form-item-webform-buttons-other-other form-no-label">


            <input data-drupal-selector="edit-webform-buttons-other-other" type="text" id="edit-webform-buttons-other-other" name="webform_buttons_other[other]"
              value="" size="60" maxlength="128" placeholder="Enter other..." class="form-text form-control">



          </div>

        </div>
        <fieldset data-drupal-selector="edit-checkboxes" aria-describedby="edit-checkboxes--wrapper--description" id="edit-checkboxes--wrapper"
          class="fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper">
          <legend>
            <span class="fieldset-legend">Checkboxes</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-checkboxes" class="js-webform-checkboxes webform-options-display-one-column form-checkboxes">
              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-checkboxes-one form-item-checkboxes-one">
                <label for="edit-checkboxes-one" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-checkboxes-one" aria-describedby="edit-checkboxes--description" type="checkbox" id="edit-checkboxes-one"
                    name="checkboxes[one]" value="one" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  One</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-checkboxes-two form-item-checkboxes-two">
                <label for="edit-checkboxes-two" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-checkboxes-two" aria-describedby="edit-checkboxes--description" type="checkbox" id="edit-checkboxes-two"
                    name="checkboxes[two]" value="two" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Two</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-checkboxes-three form-item-checkboxes-three">
                <label for="edit-checkboxes-three" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-checkboxes-three" aria-describedby="edit-checkboxes--description" type="checkbox" id="edit-checkboxes-three"
                    name="checkboxes[three]" value="three" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Three</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-checkboxes-four form-item-checkboxes-four">
                <label for="edit-checkboxes-four" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-checkboxes-four" aria-describedby="edit-checkboxes--description" type="checkbox" id="edit-checkboxes-four"
                    name="checkboxes[four]" value="four" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Four</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-checkboxes-five form-item-checkboxes-five">
                <label for="edit-checkboxes-five" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-checkboxes-five" aria-describedby="edit-checkboxes--description" type="checkbox" id="edit-checkboxes-five"
                    name="checkboxes[five]" value="five" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Five</label>
              </div>
            </div>

            <div id="edit-checkboxes--wrapper--description" class="description">
              <b>Known Issues:</b>
              <br>
              <a href="https://www.drupal.org/node/994360">Issue #994360: #states cannot disable/enable radios and checkboxes</a>
              <br>
              <a href="https://www.drupal.org/node/2836364">Issue #2836364: Wrapper attributes are not supported by composite elements, this includes radios, checkboxes,
                and buttons.</a>
            </div>
          </div>
        </fieldset>

        <div class="js-webform-checkboxes-other webform-checkboxes-other form-group js-form-item form-item js-form-type-webform-checkboxes-other form-type-webform-checkboxes-other js-form-item-webform-checkboxes-other form-item-webform-checkboxes-other">
          <label>Checkboxes other</label>
          <div id="edit-webform-checkboxes-other-checkboxes" class="js-webform-checkboxes webform-options-display-one-column form-checkboxes">
            <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-checkboxes-other-checkboxes-one form-item-webform-checkboxes-other-checkboxes-one">
              <label for="edit-webform-checkboxes-other-checkboxes-one" class="option custom-control custom-checkbox">

                <input data-drupal-selector="edit-webform-checkboxes-other-checkboxes-one" type="checkbox" id="edit-webform-checkboxes-other-checkboxes-one"
                  name="webform_checkboxes_other[checkboxes][one]" value="one" class="form-checkbox custom-control-input">

                <span class="custom-control-indicator"></span>

                One</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-checkboxes-other-checkboxes-two form-item-webform-checkboxes-other-checkboxes-two">
              <label for="edit-webform-checkboxes-other-checkboxes-two" class="option custom-control custom-checkbox">

                <input data-drupal-selector="edit-webform-checkboxes-other-checkboxes-two" type="checkbox" id="edit-webform-checkboxes-other-checkboxes-two"
                  name="webform_checkboxes_other[checkboxes][two]" value="two" class="form-checkbox custom-control-input">

                <span class="custom-control-indicator"></span>

                Two</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-checkboxes-other-checkboxes-three form-item-webform-checkboxes-other-checkboxes-three">
              <label for="edit-webform-checkboxes-other-checkboxes-three" class="option custom-control custom-checkbox">

                <input data-drupal-selector="edit-webform-checkboxes-other-checkboxes-three" type="checkbox" id="edit-webform-checkboxes-other-checkboxes-three"
                  name="webform_checkboxes_other[checkboxes][three]" value="three" class="form-checkbox custom-control-input">

                <span class="custom-control-indicator"></span>

                Three</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-checkboxes-other-checkboxes-four form-item-webform-checkboxes-other-checkboxes-four">
              <label for="edit-webform-checkboxes-other-checkboxes-four" class="option custom-control custom-checkbox">

                <input data-drupal-selector="edit-webform-checkboxes-other-checkboxes-four" type="checkbox" id="edit-webform-checkboxes-other-checkboxes-four"
                  name="webform_checkboxes_other[checkboxes][four]" value="four" class="form-checkbox custom-control-input">

                <span class="custom-control-indicator"></span>

                Four</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-checkboxes-other-checkboxes-five form-item-webform-checkboxes-other-checkboxes-five">
              <label for="edit-webform-checkboxes-other-checkboxes-five" class="option custom-control custom-checkbox">

                <input data-drupal-selector="edit-webform-checkboxes-other-checkboxes-five" type="checkbox" id="edit-webform-checkboxes-other-checkboxes-five"
                  name="webform_checkboxes_other[checkboxes][five]" value="five" class="form-checkbox custom-control-input">

                <span class="custom-control-indicator"></span>

                Five</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-checkboxes-other-checkboxes--other- form-item-webform-checkboxes-other-checkboxes--other-">
              <label for="edit-webform-checkboxes-other-checkboxes-other-" class="option custom-control custom-checkbox">

                <input data-drupal-selector="edit-webform-checkboxes-other-checkboxes-other-" type="checkbox" id="edit-webform-checkboxes-other-checkboxes-other-"
                  name="webform_checkboxes_other[checkboxes][_other_]" value="_other_" class="form-checkbox custom-control-input">

                <span class="custom-control-indicator"></span>

                Autre...</label>
            </div>
          </div>

          <div class="js-webform-checkboxes-other-input webform-checkboxes-other-input form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-webform-checkboxes-other-other form-item-webform-checkboxes-other-other form-no-label">


            <input data-drupal-selector="edit-webform-checkboxes-other-other" type="text" id="edit-webform-checkboxes-other-other" name="webform_checkboxes_other[other]"
              value="" size="60" maxlength="128" placeholder="Enter other..." class="form-text form-control">



          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-image-select form-type-webform-image-select js-form-item-webform-image-select form-item-webform-image-select">
          <label for="edit-webform-image-select">Image select</label>
          <select data-drupal-selector="edit-webform-image-select" data-show-label="data-show-label" data-images="{&quot;kitten_1&quot;:{&quot;text&quot;:&quot;Cute Kitten 1&quot;,&quot;src&quot;:&quot;http:\/\/placekitten.com\/220\/200&quot;},&quot;kitten_2&quot;:{&quot;text&quot;:&quot;Cute Kitten 2&quot;,&quot;src&quot;:&quot;http:\/\/placekitten.com\/180\/200&quot;},&quot;kitten_3&quot;:{&quot;text&quot;:&quot;Cute Kitten 3&quot;,&quot;src&quot;:&quot;http:\/\/placekitten.com\/130\/200&quot;}}"
            class="webform-image-select js-webform-image-select form-select custom-select" id="edit-webform-image-select" name="webform_image_select">
            <option value="" selected="selected">- Aucun(e) -</option>
            <option value="kitten_1">Cute Kitten 1</option>
            <option value="kitten_2">Cute Kitten 2</option>
            <option value="kitten_3">Cute Kitten 3</option>
          </select>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-image-select form-type-webform-image-select js-form-item-webform-image-select-multiple form-item-webform-image-select-multiple">
          <label for="edit-webform-image-select-multiple">Image select multiple</label>
          <select data-drupal-selector="edit-webform-image-select-multiple" data-show-label="data-show-label" data-images="{&quot;kitten_1&quot;:{&quot;text&quot;:&quot;Cute Kitten 1&quot;,&quot;src&quot;:&quot;http:\/\/placekitten.com\/220\/200&quot;},&quot;kitten_2&quot;:{&quot;text&quot;:&quot;Cute Kitten 2&quot;,&quot;src&quot;:&quot;http:\/\/placekitten.com\/180\/200&quot;},&quot;kitten_3&quot;:{&quot;text&quot;:&quot;Cute Kitten 3&quot;,&quot;src&quot;:&quot;http:\/\/placekitten.com\/130\/200&quot;}}"
            class="webform-image-select js-webform-image-select form-select custom-select" multiple="multiple" name="webform_image_select_multiple[]"
            id="edit-webform-image-select-multiple">
            <option value="kitten_1">Cute Kitten 1</option>
            <option value="kitten_2">Cute Kitten 2</option>
            <option value="kitten_3">Cute Kitten 3</option>
          </select>
        </div>
        <fieldset data-drupal-selector="edit-radios" aria-describedby="edit-radios--wrapper--description" id="edit-radios--wrapper"
          class="fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper">
          <legend>
            <span class="fieldset-legend">Radios</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-radios" class="js-webform-radios webform-options-display-one-column">
              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-radios form-item-radios">
                <label for="edit-radios-one" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-radios-one" aria-describedby="edit-radios--description" type="radio" id="edit-radios-one"
                    name="radios" value="one" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  One</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-radios form-item-radios">
                <label for="edit-radios-two" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-radios-two" aria-describedby="edit-radios--description" type="radio" id="edit-radios-two"
                    name="radios" value="two" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Two</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-radios form-item-radios">
                <label for="edit-radios-three" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-radios-three" aria-describedby="edit-radios--description" type="radio" id="edit-radios-three"
                    name="radios" value="three" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Three</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-radios form-item-radios">
                <label for="edit-radios-four" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-radios-four" aria-describedby="edit-radios--description" type="radio" id="edit-radios-four"
                    name="radios" value="four" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Four</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-radios form-item-radios">
                <label for="edit-radios-five" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-radios-five" aria-describedby="edit-radios--description" type="radio" id="edit-radios-five"
                    name="radios" value="five" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Five</label>
              </div>
            </div>

            <div id="edit-radios--wrapper--description" class="description">
              <b>Known Issues:</b>
              <br>
              <a href="https://www.drupal.org/node/2731991">Issue #2731991: Setting required on radios marks all options required</a>
              <br>
              <a href="https://www.drupal.org/node/994360">Issue #994360: #states cannot disable/enable radios and checkboxes</a>
              <br>
              <a href="https://www.drupal.org/node/2836364">Issue #2836364: Wrapper attributes are not supported by composite elements, this includes radios, checkboxes,
                and buttons.</a>
            </div>
          </div>
        </fieldset>

        <div class="js-webform-radios-other webform-radios-other form-group js-form-item form-item js-form-type-webform-radios-other form-type-webform-radios-other js-form-item-webform-radios-other form-item-webform-radios-other">
          <label>Radios other</label>
          <div id="edit-webform-radios-other-radios" class="js-webform-radios webform-options-display-one-column">
            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-radios-other-radios form-item-webform-radios-other-radios">
              <label for="edit-webform-radios-other-radios-one" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-radios-other-radios-one" type="radio" id="edit-webform-radios-other-radios-one"
                  name="webform_radios_other[radios]" value="one" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                One</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-radios-other-radios form-item-webform-radios-other-radios">
              <label for="edit-webform-radios-other-radios-two" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-radios-other-radios-two" type="radio" id="edit-webform-radios-other-radios-two"
                  name="webform_radios_other[radios]" value="two" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Two</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-radios-other-radios form-item-webform-radios-other-radios">
              <label for="edit-webform-radios-other-radios-three" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-radios-other-radios-three" type="radio" id="edit-webform-radios-other-radios-three"
                  name="webform_radios_other[radios]" value="three" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Three</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-radios-other-radios form-item-webform-radios-other-radios">
              <label for="edit-webform-radios-other-radios-four" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-radios-other-radios-four" type="radio" id="edit-webform-radios-other-radios-four"
                  name="webform_radios_other[radios]" value="four" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Four</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-radios-other-radios form-item-webform-radios-other-radios">
              <label for="edit-webform-radios-other-radios-five" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-radios-other-radios-five" type="radio" id="edit-webform-radios-other-radios-five"
                  name="webform_radios_other[radios]" value="five" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Five</label>
            </div>

            <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-radios-other-radios form-item-webform-radios-other-radios">
              <label for="edit-webform-radios-other-radios-other-" class="option custom-control custom-radio">

                <input data-drupal-selector="edit-webform-radios-other-radios-other-" type="radio" id="edit-webform-radios-other-radios-other-"
                  name="webform_radios_other[radios]" value="_other_" class="form-radio custom-control-input">

                <span class="custom-control-indicator"></span>

                Autre...</label>
            </div>
          </div>

          <div class="js-webform-radios-other-input webform-radios-other-input form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-webform-radios-other-other form-item-webform-radios-other-other form-no-label">


            <input data-drupal-selector="edit-webform-radios-other-other" type="text" id="edit-webform-radios-other-other" name="webform_radios_other[other]"
              value="" size="60" maxlength="128" placeholder="Enter other..." class="form-text form-control">



          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-select form-item-select">
          <label for="edit-select">Select</label>
          <select data-drupal-selector="edit-select" aria-describedby="edit-select--description" id="edit-select" name="select" class="form-select custom-select">
            <option value="" selected="selected">- Aucun(e) -</option>
            <option value="one">One</option>
            <option value="two">Two</option>
            <option value="three">Three</option>
            <option value="four">Four</option>
            <option value="five">Five</option>
          </select>
          <small id="edit-select--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/1426646">Issue #1426646: "-Select-" option is lost when webform elements uses '#states'</a>
            <br>
            <a href="https://www.drupal.org/node/1149078">Issue #1149078: States API doesn't work with multiple select fields</a>
            <br>
            <a href="https://www.drupal.org/node/2791741">Issue #2791741: FAPI states: fields aren't hidden initially when depending on multi-value selection</a>
          </small>
        </div>

        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-select-multiple form-item-select-multiple">
          <label for="edit-select-multiple">Select multiple</label>
          <select class="js-webform-select2 webform-select2 form-select custom-select" data-drupal-selector="edit-select-multiple"
            multiple="multiple" name="select_multiple[]" id="edit-select-multiple">
            <option value="one">One</option>
            <option value="two">Two</option>
            <option value="three">Three</option>
            <option value="four">Four</option>
            <option value="five">Five</option>
          </select>
        </div>

        <div class="js-webform-select-other webform-select-other form-group js-form-item form-item js-form-type-webform-select-other form-type-webform-select-other js-form-item-webform-select-other form-item-webform-select-other">
          <label for="edit-webform-select-other">Select other</label>

          <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-select-other-select form-item-webform-select-other-select form-no-label">
            <select data-drupal-selector="edit-webform-select-other-select" id="edit-webform-select-other-select" name="webform_select_other[select]"
              class="form-select custom-select">
              <option value="" selected="selected">- Aucun(e) -</option>
              <option value="one">One</option>
              <option value="two">Two</option>
              <option value="three">Three</option>
              <option value="four">Four</option>
              <option value="five">Five</option>
              <option value="_other_">Autre...</option>
            </select>
          </div>

          <div class="js-webform-select-other-input webform-select-other-input form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-webform-select-other-other form-item-webform-select-other-other form-no-label">


            <input data-drupal-selector="edit-webform-select-other-other" type="text" id="edit-webform-select-other-other" name="webform_select_other[other]"
              value="" size="60" maxlength="128" placeholder="Enter other..." class="form-text form-control">



          </div>

        </div>

        <div class="js-webform-select-other webform-select-other form-group js-form-item form-item js-form-type-webform-select-other form-type-webform-select-other js-form-item-webform-select-other-multiple form-item-webform-select-other-multiple">
          <label for="edit-webform-select-other-multiple">Select other multiple</label>

          <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-select-other-multiple-select form-item-webform-select-other-multiple-select form-no-label">
            <select class="js-webform-select2 webform-select2 form-select custom-select" data-drupal-selector="edit-webform-select-other-multiple-select"
              multiple="multiple" name="webform_select_other_multiple[select][]" id="edit-webform-select-other-multiple-select">
              <option value="one">One</option>
              <option value="two">Two</option>
              <option value="three">Three</option>
              <option value="four">Four</option>
              <option value="five">Five</option>
              <option value="_other_">Autre...</option>
            </select>
          </div>

          <div class="js-webform-select-other-input webform-select-other-input form-group js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-webform-select-other-multiple-other form-item-webform-select-other-multiple-other form-no-label">


            <input data-drupal-selector="edit-webform-select-other-multiple-other" type="text" id="edit-webform-select-other-multiple-other"
              name="webform_select_other_multiple[other]" value="" size="60" maxlength="128" placeholder="Enter other..." class="form-text form-control">



          </div>

        </div>
        <table class="tableselect responsive-enabled" data-drupal-selector="edit-tableselect" id="edit-tableselect" data-striping="1">


          <thead>
            <tr>
              <th class="select-all"></th>
              <th>Table select</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-tableselect-one form-item-tableselect-one form-no-label">


                  <input class="tableselect form-checkbox custom-control-input" data-drupal-selector="edit-tableselect-one" type="checkbox"
                    id="edit-tableselect-one" name="tableselect[one]" value="one">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>One</td>
            </tr>
            <tr>
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-tableselect-two form-item-tableselect-two form-no-label">


                  <input class="tableselect form-checkbox custom-control-input" data-drupal-selector="edit-tableselect-two" type="checkbox"
                    id="edit-tableselect-two" name="tableselect[two]" value="two">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Two</td>
            </tr>
            <tr>
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-tableselect-three form-item-tableselect-three form-no-label">


                  <input class="tableselect form-checkbox custom-control-input" data-drupal-selector="edit-tableselect-three" type="checkbox"
                    id="edit-tableselect-three" name="tableselect[three]" value="three">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Three</td>
            </tr>
            <tr>
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-tableselect-four form-item-tableselect-four form-no-label">


                  <input class="tableselect form-checkbox custom-control-input" data-drupal-selector="edit-tableselect-four" type="checkbox"
                    id="edit-tableselect-four" name="tableselect[four]" value="four">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Four</td>
            </tr>
            <tr>
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-tableselect-five form-item-tableselect-five form-no-label">


                  <input class="tableselect form-checkbox custom-control-input" data-drupal-selector="edit-tableselect-five" type="checkbox"
                    id="edit-tableselect-five" name="tableselect[five]" value="five">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Five</td>
            </tr>
          </tbody>
        </table>
        <table class="webform-tableselect-sort responsive-enabled js-tableselect-sort tableselect-sort" data-drupal-selector="edit-webform-tableselect-sort"
          id="edit-webform-tableselect-sort" data-striping="1">


          <thead>
            <tr>
              <th class="select-all"></th>
              <th>Tableselect sort</th>
              <th>Poids</th>
            </tr>
          </thead>

          <tbody>
            <tr class="draggable">
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-tableselect-sort-one-checkbox form-item-webform-tableselect-sort-one-checkbox form-no-label">


                  <input class="webform-tableselect-sort form-checkbox custom-control-input" data-drupal-selector="edit-webform-tableselect-sort-one-checkbox"
                    type="checkbox" id="edit-webform-tableselect-sort-one-checkbox" name="webform_tableselect_sort[one][checkbox]"
                    value="one">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>One</td>
              <td>
                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-tableselect-sort-one-weight form-item-webform-tableselect-sort-one-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-tableselect-sort-one-weight"
                    id="edit-webform-tableselect-sort-one-weight" name="webform_tableselect_sort[one][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0" selected="selected">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-tableselect-sort-two-checkbox form-item-webform-tableselect-sort-two-checkbox form-no-label">


                  <input class="webform-tableselect-sort form-checkbox custom-control-input" data-drupal-selector="edit-webform-tableselect-sort-two-checkbox"
                    type="checkbox" id="edit-webform-tableselect-sort-two-checkbox" name="webform_tableselect_sort[two][checkbox]"
                    value="two">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Two</td>
              <td>
                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-tableselect-sort-two-weight form-item-webform-tableselect-sort-two-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-tableselect-sort-two-weight"
                    id="edit-webform-tableselect-sort-two-weight" name="webform_tableselect_sort[two][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1" selected="selected">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-tableselect-sort-three-checkbox form-item-webform-tableselect-sort-three-checkbox form-no-label">


                  <input class="webform-tableselect-sort form-checkbox custom-control-input" data-drupal-selector="edit-webform-tableselect-sort-three-checkbox"
                    type="checkbox" id="edit-webform-tableselect-sort-three-checkbox" name="webform_tableselect_sort[three][checkbox]"
                    value="three">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Three</td>
              <td>
                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-tableselect-sort-three-weight form-item-webform-tableselect-sort-three-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-tableselect-sort-three-weight"
                    id="edit-webform-tableselect-sort-three-weight" name="webform_tableselect_sort[three][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2" selected="selected">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-tableselect-sort-four-checkbox form-item-webform-tableselect-sort-four-checkbox form-no-label">


                  <input class="webform-tableselect-sort form-checkbox custom-control-input" data-drupal-selector="edit-webform-tableselect-sort-four-checkbox"
                    type="checkbox" id="edit-webform-tableselect-sort-four-checkbox" name="webform_tableselect_sort[four][checkbox]"
                    value="four">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Four</td>
              <td>
                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-tableselect-sort-four-weight form-item-webform-tableselect-sort-four-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-tableselect-sort-four-weight"
                    id="edit-webform-tableselect-sort-four-weight" name="webform_tableselect_sort[four][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" selected="selected">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>
                <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-tableselect-sort-five-checkbox form-item-webform-tableselect-sort-five-checkbox form-no-label">


                  <input class="webform-tableselect-sort form-checkbox custom-control-input" data-drupal-selector="edit-webform-tableselect-sort-five-checkbox"
                    type="checkbox" id="edit-webform-tableselect-sort-five-checkbox" name="webform_tableselect_sort[five][checkbox]"
                    value="five">

                  <span class="custom-control-indicator"></span>


                </div>
              </td>
              <td>Five</td>
              <td>
                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-tableselect-sort-five-weight form-item-webform-tableselect-sort-five-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-tableselect-sort-five-weight"
                    id="edit-webform-tableselect-sort-five-weight" name="webform_tableselect_sort[five][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4" selected="selected">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <table class="webform-table-sort responsive-enabled js-table-sort table-sort" data-drupal-selector="edit-webform-table-sort"
          id="edit-webform-table-sort" data-striping="1">


          <thead>
            <tr>
              <th>Table sort</th>
              <th>Poids</th>
            </tr>
          </thead>

          <tbody>
            <tr class="draggable">
              <td>One</td>
              <td>

                <input data-drupal-selector="edit-webform-table-sort-one-value" type="hidden" name="webform_table_sort[one][value]" value="one">



                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-table-sort-one-weight form-item-webform-table-sort-one-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-table-sort-one-weight" id="edit-webform-table-sort-one-weight"
                    name="webform_table_sort[one][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0" selected="selected">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>Two</td>
              <td>

                <input data-drupal-selector="edit-webform-table-sort-two-value" type="hidden" name="webform_table_sort[two][value]" value="two">



                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-table-sort-two-weight form-item-webform-table-sort-two-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-table-sort-two-weight" id="edit-webform-table-sort-two-weight"
                    name="webform_table_sort[two][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1" selected="selected">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>Three</td>
              <td>

                <input data-drupal-selector="edit-webform-table-sort-three-value" type="hidden" name="webform_table_sort[three][value]" value="three">



                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-table-sort-three-weight form-item-webform-table-sort-three-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-table-sort-three-weight" id="edit-webform-table-sort-three-weight"
                    name="webform_table_sort[three][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2" selected="selected">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>Four</td>
              <td>

                <input data-drupal-selector="edit-webform-table-sort-four-value" type="hidden" name="webform_table_sort[four][value]" value="four">



                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-table-sort-four-weight form-item-webform-table-sort-four-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-table-sort-four-weight" id="edit-webform-table-sort-four-weight"
                    name="webform_table_sort[four][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" selected="selected">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr class="draggable">
              <td>Five</td>
              <td>

                <input data-drupal-selector="edit-webform-table-sort-five-value" type="hidden" name="webform_table_sort[five][value]" value="five">



                <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-table-sort-five-weight form-item-webform-table-sort-five-weight form-no-label">

                  <select class="table-sort-weight form-select custom-select" data-drupal-selector="edit-webform-table-sort-five-weight" id="edit-webform-table-sort-five-weight"
                    name="webform_table_sort[five][weight]">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4" selected="selected">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <fieldset data-drupal-selector="edit-webform-toggles" id="edit-webform-toggles--wrapper" class="fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper">
          <legend>
            <span class="fieldset-legend">Toggles</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-webform-toggles" class="form-checkboxes">
              <div class="form-group js-form-item form-item js-form-type-webform-toggle form-type-webform-toggle js-form-item-webform-toggles-one form-item-webform-toggles-one">


                <input data-drupal-selector="edit-webform-toggles-one" type="checkbox" id="edit-webform-toggles-one" name="webform_toggles[one]"
                  value="one" class="form-checkbox custom-control-input">
                <div class="js-webform-toggle webform-toggle toggle toggle-medium toggle-light" data-toggle-height="24" data-toggle-width="48"
                  data-toggle-text-on="" data-toggle-text-off=""></div>




                <label for="edit-webform-toggles-one" class="option">One</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-webform-toggle form-type-webform-toggle js-form-item-webform-toggles-two form-item-webform-toggles-two">


                <input data-drupal-selector="edit-webform-toggles-two" type="checkbox" id="edit-webform-toggles-two" name="webform_toggles[two]"
                  value="two" class="form-checkbox custom-control-input">
                <div class="js-webform-toggle webform-toggle toggle toggle-medium toggle-light" data-toggle-height="24" data-toggle-width="48"
                  data-toggle-text-on="" data-toggle-text-off=""></div>




                <label for="edit-webform-toggles-two" class="option">Two</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-webform-toggle form-type-webform-toggle js-form-item-webform-toggles-three form-item-webform-toggles-three">


                <input data-drupal-selector="edit-webform-toggles-three" type="checkbox" id="edit-webform-toggles-three" name="webform_toggles[three]"
                  value="three" class="form-checkbox custom-control-input">
                <div class="js-webform-toggle webform-toggle toggle toggle-medium toggle-light" data-toggle-height="24" data-toggle-width="48"
                  data-toggle-text-on="" data-toggle-text-off=""></div>




                <label for="edit-webform-toggles-three" class="option">Three</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-webform-toggle form-type-webform-toggle js-form-item-webform-toggles-four form-item-webform-toggles-four">


                <input data-drupal-selector="edit-webform-toggles-four" type="checkbox" id="edit-webform-toggles-four" name="webform_toggles[four]"
                  value="four" class="form-checkbox custom-control-input">
                <div class="js-webform-toggle webform-toggle toggle toggle-medium toggle-light" data-toggle-height="24" data-toggle-width="48"
                  data-toggle-text-on="" data-toggle-text-off=""></div>




                <label for="edit-webform-toggles-four" class="option">Four</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-webform-toggle form-type-webform-toggle js-form-item-webform-toggles-five form-item-webform-toggles-five">


                <input data-drupal-selector="edit-webform-toggles-five" type="checkbox" id="edit-webform-toggles-five" name="webform_toggles[five]"
                  value="five" class="form-checkbox custom-control-input">
                <div class="js-webform-toggle webform-toggle toggle toggle-medium toggle-light" data-toggle-height="24" data-toggle-width="48"
                  data-toggle-text-on="" data-toggle-text-off=""></div>




                <label for="edit-webform-toggles-five" class="option">Five</label>
              </div>
            </div>

          </div>
        </fieldset>


      </details>
      <details data-webform-key="containers" data-drupal-selector="edit-containers" id="edit-containers" class="js-form-wrapper form-wrapper"
        open="open">
        <summary role="button" aria-controls="edit-containers" aria-expanded="true" aria-pressed="true">Containers</summary>

        <div data-drupal-selector="edit-container" id="edit-container" class="js-form-wrapper form-wrapper">
          <div id="edit-container-content" class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item- form-no-label">
            This is a Container container.
          </div>
        </div>
        <details data-webform-key="details" data-drupal-selector="edit-details" aria-describedby="edit-details--description" id="edit-details"
          class="js-form-wrapper form-wrapper">
          <summary role="button" aria-controls="edit-details" aria-expanded="false" aria-pressed="false">Details</summary>
          <b>Known Issues:</b>
          <br>
          <a href="https://www.drupal.org/node/2348851">Issue #2348851: Regression: Allow HTML tags inside detail summary</a>

          <div id="edit-details-content" class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item- form-no-label">
            This is a Details container.
          </div>


        </details>
        <fieldset data-drupal-selector="edit-fieldset" id="edit-fieldset" class="js-form-item form-item js-form-wrapper form-wrapper">
          <legend>
            <span class="fieldset-legend">Fieldset</span>
          </legend>
          <div class="fieldset-wrapper">

            <div id="edit-fieldset-content" class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item- form-no-label">
              This is a Fieldset container.
            </div>

          </div>
        </fieldset>

        <div class="webform-has-field-prefix webform-has-field-suffix form-group js-form-item form-item js-form-type-item form-type-item js-form-item-item form-item-item"
          id="edit-item">
          <label for="edit-item">Item</label>
          <span class="field-prefix">{field_prefix}</span>
          {markup}
          <div id="edit-item-content" class="form-group js-form-item form-item js-form-type-webform-markup form-type-webform-markup js-form-item- form-item- form-no-label">
            This is a Item container.
          </div>

          <span class="field-suffix">{field_suffix}</span>
          <small id="edit-item--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/783438">Issue #783438: #states doesn't work for #type item</a>
          </small>
        </div>
        <label data-drupal-selector="edit-label" for="edit-label">Label</label>

      </details>
      <details data-webform-key="date_time_elements" data-drupal-selector="edit-date-time-elements" id="edit-date-time-elements"
        class="js-form-wrapper form-wrapper" open="open">
        <summary role="button" aria-controls="edit-date-time-elements" aria-expanded="true" aria-pressed="true">Date/time elements</summary>


        <div class="form-group js-form-item form-item js-form-type-date form-type-date js-form-item-date form-item-date">
          <label for="edit-date">Date</label>


          <input type="date" data-drupal-selector="edit-date" data-drupal-date-format="Y-m-d" id="edit-date" name="date" value="" class="form-date form-control">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-date-multiple form-item-date-multiple">
          <label for="edit-date-multiple">Date multiple</label>
          <div id="date_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-date-multiple-items" id="edit-date-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-date-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-date form-type-date js-form-item-date-multiple-items-0--item- form-item-date-multiple-items-0--item- form-no-label">
                      <label for="edit-date-multiple-items-0-item-" class="visually-hidden">Date multiple</label>


                      <input type="date" data-drupal-selector="edit-date-multiple-items-0-item-" data-drupal-date-format="Y-m-d" id="edit-date-multiple-items-0-item-"
                        name="date_multiple[items][0][_item_]" value="" class="form-date form-control">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-date-multiple-items-0-weight form-item-date-multiple-items-0-weight form-no-label">
                      <label for="edit-date-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-date-multiple-items-0-weight"
                        type="number" id="edit-date-multiple-items-0-weight" name="date_multiple[items][0][weight]" value="0"
                        step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-date-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image" id="edit-date-multiple-items-0-operations-add"
                      name="date_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter"
                      class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-date-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image" id="edit-date-multiple-items-0-operations-remove"
                      name="date_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg" alt="Retirer" title="Retirer"
                      class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-date-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-date-multiple-add-submit"
              name="date_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-date-multiple-add-more-items form-item-date-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-date-multiple-add-more-items" type="number" id="edit-date-multiple-add-more-items" name="date_multiple[add][more_items]"
                value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div class="form-group js-form-item form-item js-form-type-datetime form-type-datetime js-form-item-datetime form-item-datetime">
          <label for="edit-datetime">Date/time</label>
          <div id="edit-datetime">

            <div class="form-group js-form-item form-item js-form-type-date form-type-date js-form-item-datetime-date form-item-datetime-date form-no-label">
              <label for="edit-datetime-date" class="visually-hidden">Date</label>


              <input data-drupal-selector="edit-datetime-date" aria-describedby="edit-datetime--description" title="Date (par ex. 2017-10-18)"
                type="date" data-drupal-date-format="Y-m-d" id="edit-datetime-date" name="datetime[date]" value="" size="12"
                class="form-date form-control">



            </div>

            <div class="form-group js-form-item form-item js-form-type-date form-type-date js-form-item-datetime-time form-item-datetime-time form-no-label">
              <label for="edit-datetime-time" class="visually-hidden">Heure</label>


              <input data-drupal-selector="edit-datetime-time" aria-describedby="edit-datetime--description" title="Temps (par ex. 15:18:01)"
                type="time" step="1" data-webform-time-format="H:i:s" id="edit-datetime-time" name="datetime[time]" value=""
                size="12" class="form-time">



            </div>

          </div>

          <small id="edit-datetime--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/2419131">Issue #2419131: #states attribute does not work on #type datetime</a>
          </small>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-datetime-multiple form-item-datetime-multiple">
          <label for="edit-datetime-multiple">Date/time multiple</label>
          <div id="datetime_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-datetime-multiple-items" id="edit-datetime-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-datetime-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-datetime form-type-datetime js-form-item-datetime-multiple-items-0--item- form-item-datetime-multiple-items-0--item- form-no-label">
                      <label for="edit-datetime-multiple-items-0-item-" class="visually-hidden">Date/time multiple</label>
                      <div id="edit-datetime-multiple-items-0-item-">

                        <div class="form-group js-form-item form-item js-form-type-date form-type-date js-form-item-datetime-multiple-items-0--item--date form-item-datetime-multiple-items-0--item--date form-no-label">
                          <label for="edit-datetime-multiple-items-0-item-date" class="visually-hidden">Date</label>


                          <input data-drupal-selector="edit-datetime-multiple-items-0-item-date" title="Date (par ex. 2017-10-18)" type="date" data-drupal-date-format="Y-m-d"
                            id="edit-datetime-multiple-items-0-item-date" name="datetime_multiple[items][0][_item_][date]"
                            value="" size="12" class="form-date form-control">



                        </div>

                        <div class="form-group js-form-item form-item js-form-type-date form-type-date js-form-item-datetime-multiple-items-0--item--time form-item-datetime-multiple-items-0--item--time form-no-label">
                          <label for="edit-datetime-multiple-items-0-item-time" class="visually-hidden">Heure</label>


                          <input data-drupal-selector="edit-datetime-multiple-items-0-item-time" title="Temps (par ex. 15:18:01)" type="time" step="1"
                            data-webform-time-format="H:i:s" id="edit-datetime-multiple-items-0-item-time" name="datetime_multiple[items][0][_item_][time]"
                            value="" size="12" class="form-time">



                        </div>

                      </div>

                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-datetime-multiple-items-0-weight form-item-datetime-multiple-items-0-weight form-no-label">
                      <label for="edit-datetime-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-datetime-multiple-items-0-weight"
                        type="number" id="edit-datetime-multiple-items-0-weight" name="datetime_multiple[items][0][weight]"
                        value="0" step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-datetime-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image"
                      id="edit-datetime-multiple-items-0-operations-add" name="datetime_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg"
                      alt="Ajouter" title="Ajouter" class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-datetime-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image"
                      id="edit-datetime-multiple-items-0-operations-remove" name="datetime_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg"
                      alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-datetime-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-datetime-multiple-add-submit"
              name="datetime_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-datetime-multiple-add-more-items form-item-datetime-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-datetime-multiple-add-more-items" type="number" id="edit-datetime-multiple-add-more-items"
                name="datetime_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div class="form-group js-form-item form-item js-form-type-datelist form-type-datelist js-form-item-datelist form-item-datelist">
          <label for="edit-datelist">Date list</label>
          <div id="edit-datelist">

            <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-year form-item-datelist-year form-no-label">
              <label for="edit-datelist-year" class="visually-hidden">Année</label>
              <select data-drupal-selector="edit-datelist-year" title="Année" id="edit-datelist-year" name="datelist[year]" class="form-select custom-select">
                <option value="" selected="selected">Année</option>
                <option value="1900">1900</option>
                <option value="1901">1901</option>
                <option value="1902">1902</option>
                <option value="1903">1903</option>
                <option value="1904">1904</option>
                <option value="1905">1905</option>
                <option value="1906">1906</option>
                <option value="1907">1907</option>
                <option value="1908">1908</option>
                <option value="1909">1909</option>
                <option value="1910">1910</option>
                <option value="1911">1911</option>
                <option value="1912">1912</option>
                <option value="1913">1913</option>
                <option value="1914">1914</option>
                <option value="1915">1915</option>
                <option value="1916">1916</option>
                <option value="1917">1917</option>
                <option value="1918">1918</option>
                <option value="1919">1919</option>
                <option value="1920">1920</option>
                <option value="1921">1921</option>
                <option value="1922">1922</option>
                <option value="1923">1923</option>
                <option value="1924">1924</option>
                <option value="1925">1925</option>
                <option value="1926">1926</option>
                <option value="1927">1927</option>
                <option value="1928">1928</option>
                <option value="1929">1929</option>
                <option value="1930">1930</option>
                <option value="1931">1931</option>
                <option value="1932">1932</option>
                <option value="1933">1933</option>
                <option value="1934">1934</option>
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
                <option value="2041">2041</option>
                <option value="2042">2042</option>
                <option value="2043">2043</option>
                <option value="2044">2044</option>
                <option value="2045">2045</option>
                <option value="2046">2046</option>
                <option value="2047">2047</option>
                <option value="2048">2048</option>
                <option value="2049">2049</option>
                <option value="2050">2050</option>
              </select>
            </div>

            <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-month form-item-datelist-month form-no-label">
              <label for="edit-datelist-month" class="visually-hidden">Mois</label>
              <select data-drupal-selector="edit-datelist-month" title="Mois" id="edit-datelist-month" name="datelist[month]" class="form-select custom-select">
                <option value="" selected="selected">Mois</option>
                <option value="1">Jan</option>
                <option value="2">Fév</option>
                <option value="3">Mar</option>
                <option value="4">Avr</option>
                <option value="5">Mai</option>
                <option value="6">Jun</option>
                <option value="7">Jul</option>
                <option value="8">Aoû</option>
                <option value="9">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Déc</option>
              </select>
            </div>

            <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-day form-item-datelist-day form-no-label">
              <label for="edit-datelist-day" class="visually-hidden">Jour</label>
              <select data-drupal-selector="edit-datelist-day" title="Jour" id="edit-datelist-day" name="datelist[day]" class="form-select custom-select">
                <option value="" selected="selected">Jour</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>

            <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-hour form-item-datelist-hour form-no-label">
              <label for="edit-datelist-hour" class="visually-hidden">Heure</label>
              <select data-drupal-selector="edit-datelist-hour" title="Heure" id="edit-datelist-hour" name="datelist[hour]" class="form-select custom-select">
                <option value="" selected="selected">Heure</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
            </div>

            <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-minute form-item-datelist-minute form-no-label">
              <label for="edit-datelist-minute" class="visually-hidden">Minute</label>
              <select data-drupal-selector="edit-datelist-minute" title="Minute" id="edit-datelist-minute" name="datelist[minute]" class="form-select custom-select">
                <option value="" selected="selected">Minute</option>
                <option value="0">00</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
              </select>
            </div>

          </div>

        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-datelist-multiple form-item-datelist-multiple">
          <label for="edit-datelist-multiple">Date list multiple</label>
          <div id="datelist_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-datelist-multiple-items" id="edit-datelist-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-datelist-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-datelist form-type-datelist js-form-item-datelist-multiple-items-0--item- form-item-datelist-multiple-items-0--item- form-no-label">
                      <label for="edit-datelist-multiple-items-0-item-" class="visually-hidden">Date list multiple</label>
                      <div id="edit-datelist-multiple-items-0-item-">

                        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-multiple-items-0--item--year form-item-datelist-multiple-items-0--item--year form-no-label">
                          <label for="edit-datelist-multiple-items-0-item-year" class="visually-hidden">Année</label>
                          <select data-drupal-selector="edit-datelist-multiple-items-0-item-year" title="Année" id="edit-datelist-multiple-items-0-item-year"
                            name="datelist_multiple[items][0][_item_][year]" class="form-select custom-select">
                            <option value="" selected="selected">Année</option>
                            <option value="1900">1900</option>
                            <option value="1901">1901</option>
                            <option value="1902">1902</option>
                            <option value="1903">1903</option>
                            <option value="1904">1904</option>
                            <option value="1905">1905</option>
                            <option value="1906">1906</option>
                            <option value="1907">1907</option>
                            <option value="1908">1908</option>
                            <option value="1909">1909</option>
                            <option value="1910">1910</option>
                            <option value="1911">1911</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                            <option value="1914">1914</option>
                            <option value="1915">1915</option>
                            <option value="1916">1916</option>
                            <option value="1917">1917</option>
                            <option value="1918">1918</option>
                            <option value="1919">1919</option>
                            <option value="1920">1920</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>
                            <option value="2037">2037</option>
                            <option value="2038">2038</option>
                            <option value="2039">2039</option>
                            <option value="2040">2040</option>
                            <option value="2041">2041</option>
                            <option value="2042">2042</option>
                            <option value="2043">2043</option>
                            <option value="2044">2044</option>
                            <option value="2045">2045</option>
                            <option value="2046">2046</option>
                            <option value="2047">2047</option>
                            <option value="2048">2048</option>
                            <option value="2049">2049</option>
                            <option value="2050">2050</option>
                          </select>
                        </div>

                        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-multiple-items-0--item--month form-item-datelist-multiple-items-0--item--month form-no-label">
                          <label for="edit-datelist-multiple-items-0-item-month" class="visually-hidden">Mois</label>
                          <select data-drupal-selector="edit-datelist-multiple-items-0-item-month" title="Mois" id="edit-datelist-multiple-items-0-item-month"
                            name="datelist_multiple[items][0][_item_][month]" class="form-select custom-select">
                            <option value="" selected="selected">Mois</option>
                            <option value="1">Jan</option>
                            <option value="2">Fév</option>
                            <option value="3">Mar</option>
                            <option value="4">Avr</option>
                            <option value="5">Mai</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aoû</option>
                            <option value="9">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Déc</option>
                          </select>
                        </div>

                        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-multiple-items-0--item--day form-item-datelist-multiple-items-0--item--day form-no-label">
                          <label for="edit-datelist-multiple-items-0-item-day" class="visually-hidden">Jour</label>
                          <select data-drupal-selector="edit-datelist-multiple-items-0-item-day" title="Jour" id="edit-datelist-multiple-items-0-item-day"
                            name="datelist_multiple[items][0][_item_][day]" class="form-select custom-select">
                            <option value="" selected="selected">Jour</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                        </div>

                        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-multiple-items-0--item--hour form-item-datelist-multiple-items-0--item--hour form-no-label">
                          <label for="edit-datelist-multiple-items-0-item-hour" class="visually-hidden">Heure</label>
                          <select data-drupal-selector="edit-datelist-multiple-items-0-item-hour" title="Heure" id="edit-datelist-multiple-items-0-item-hour"
                            name="datelist_multiple[items][0][_item_][hour]" class="form-select custom-select">
                            <option value="" selected="selected">Heure</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                          </select>
                        </div>

                        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-datelist-multiple-items-0--item--minute form-item-datelist-multiple-items-0--item--minute form-no-label">
                          <label for="edit-datelist-multiple-items-0-item-minute" class="visually-hidden">Minute</label>
                          <select data-drupal-selector="edit-datelist-multiple-items-0-item-minute" title="Minute" id="edit-datelist-multiple-items-0-item-minute"
                            name="datelist_multiple[items][0][_item_][minute]" class="form-select custom-select">
                            <option value="" selected="selected">Minute</option>
                            <option value="0">00</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                          </select>
                        </div>

                      </div>

                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-datelist-multiple-items-0-weight form-item-datelist-multiple-items-0-weight form-no-label">
                      <label for="edit-datelist-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-datelist-multiple-items-0-weight"
                        type="number" id="edit-datelist-multiple-items-0-weight" name="datelist_multiple[items][0][weight]"
                        value="0" step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-datelist-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image"
                      id="edit-datelist-multiple-items-0-operations-add" name="datelist_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg"
                      alt="Ajouter" title="Ajouter" class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-datelist-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image"
                      id="edit-datelist-multiple-items-0-operations-remove" name="datelist_multiple_table_remove_0" src="/modules/webform/images/icons/ex.svg"
                      alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-datelist-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-datelist-multiple-add-submit"
              name="datelist_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-datelist-multiple-add-more-items form-item-datelist-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-datelist-multiple-add-more-items" type="number" id="edit-datelist-multiple-add-more-items"
                name="datelist_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-time form-type-webform-time js-form-item-webform-time form-item-webform-time">
          <label for="edit-webform-time">Time</label>


          <input data-drupal-selector="edit-webform-time" aria-describedby="edit-webform-time--description" data-webform-time-format="H:i"
            type="time" id="edit-webform-time" name="webform_time" size="10" class="form-time webform-time">



          <small id="edit-webform-time--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/1838234">Issue #1838234: Add jQuery Timepicker for the Time element of the datetime field</a>
          </small>
        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-webform-time-multiple form-item-webform-time-multiple">
          <label for="edit-webform-time-multiple">Time multiple</label>
          <div id="webform_time_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-webform-time-multiple-items" id="edit-webform-time-multiple-items" class="responsive-enabled"
              data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-webform-time-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-webform-time form-type-webform-time js-form-item-webform-time-multiple-items-0--item- form-item-webform-time-multiple-items-0--item- form-no-label">
                      <label for="edit-webform-time-multiple-items-0-item-" class="visually-hidden">Time multiple</label>


                      <input data-drupal-selector="edit-webform-time-multiple-items-0-item-" data-webform-time-format="H:i" type="time" id="edit-webform-time-multiple-items-0-item-"
                        name="webform_time_multiple[items][0][_item_]" size="10" class="form-time webform-time">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-webform-time-multiple-items-0-weight form-item-webform-time-multiple-items-0-weight form-no-label">
                      <label for="edit-webform-time-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-webform-time-multiple-items-0-weight"
                        type="number" id="edit-webform-time-multiple-items-0-weight" name="webform_time_multiple[items][0][weight]"
                        value="0" step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-webform-time-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image"
                      id="edit-webform-time-multiple-items-0-operations-add" name="webform_time_multiple_table_add_0" src="/modules/webform/images/icons/plus.svg"
                      alt="Ajouter" title="Ajouter" class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-webform-time-multiple-items-0-operations-remove" formnovalidate="formnovalidate" type="image"
                      id="edit-webform-time-multiple-items-0-operations-remove" name="webform_time_multiple_table_remove_0"
                      src="/modules/webform/images/icons/ex.svg" alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-webform-time-multiple-add-submit" formnovalidate="formnovalidate" type="submit" id="edit-webform-time-multiple-add-submit"
              name="webform_time_multiple_table_add" value="Ajouter" class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-webform-time-multiple-add-more-items form-item-webform-time-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-webform-time-multiple-add-more-items" type="number" id="edit-webform-time-multiple-add-more-items"
                name="webform_time_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>


      </details>
      <details data-webform-key="entity_reference_elements" data-drupal-selector="edit-entity-reference-elements" id="edit-entity-reference-elements"
        class="js-form-wrapper form-wrapper" open="open">
        <summary role="button" aria-controls="edit-entity-reference-elements" aria-expanded="true" aria-pressed="true">Entity reference elements</summary>


        <div class="form-group js-form-item form-item js-form-type-entity-autocomplete form-type-entity-autocomplete js-form-item-entity-autocomplete form-item-entity-autocomplete">
          <label for="edit-entity-autocomplete">Entity autocomplete</label>


          <input data-drupal-selector="edit-entity-autocomplete" aria-describedby="edit-entity-autocomplete--description" class="form-autocomplete form-text form-control"
            data-autocomplete-path="/fr/entity_reference_autocomplete/user/default%3Auser/tF6C536AVTBDcRGAsdxdCBSq112WI-jLdDHfL3bWcmY"
            type="text" id="edit-entity-autocomplete" name="entity_autocomplete" value="" size="60">



          <small id="edit-entity-autocomplete--description" class="description form-text text-muted">
            <b>Known Issues:</b>
            <br>
            <a href="https://www.drupal.org/node/2826451">Issue #2826451: TermSelection returning HTML characters in select list</a>
          </small>
        </div>

        <div class="form-group js-form-item form-item js-form-type-entity-autocomplete form-type-entity-autocomplete js-form-item-entity-autocomplete-tags form-item-entity-autocomplete-tags">
          <label for="edit-entity-autocomplete-tags">Entity autocomplete tags</label>


          <input data-drupal-selector="edit-entity-autocomplete-tags" class="form-autocomplete form-text form-control" data-autocomplete-path="/fr/entity_reference_autocomplete/user/default%3Auser/tF6C536AVTBDcRGAsdxdCBSq112WI-jLdDHfL3bWcmY"
            type="text" id="edit-entity-autocomplete-tags" name="entity_autocomplete_tags" value="" size="60">



        </div>

        <div class="form-group js-form-item form-item js-form-type-webform-multiple form-type-webform-multiple js-form-item-entity-autocomplete-multiple form-item-entity-autocomplete-multiple">
          <label for="edit-entity-autocomplete-multiple">Entity autocomplete multiple</label>
          <div id="entity_autocomplete_multiple_table" class="webform-multiple-table">
            <table data-drupal-selector="edit-entity-autocomplete-multiple-items" id="edit-entity-autocomplete-multiple-items"
              class="responsive-enabled" data-striping="1">


              <thead>
                <tr>
                  <th colspan="4"></th>
                </tr>
              </thead>

              <tbody>
                <tr class="draggable" data-drupal-selector="edit-entity-autocomplete-multiple-items-0">
                  <td></td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-entity-autocomplete form-type-entity-autocomplete js-form-item-entity-autocomplete-multiple-items-0--item- form-item-entity-autocomplete-multiple-items-0--item- form-no-label">
                      <label for="edit-entity-autocomplete-multiple-items-0-item-" class="visually-hidden">Entity autocomplete multiple</label>


                      <input data-drupal-selector="edit-entity-autocomplete-multiple-items-0-item-" class="form-autocomplete form-text form-control"
                        data-autocomplete-path="/fr/entity_reference_autocomplete/user/default%3Auser/tF6C536AVTBDcRGAsdxdCBSq112WI-jLdDHfL3bWcmY"
                        type="text" id="edit-entity-autocomplete-multiple-items-0-item-" name="entity_autocomplete_multiple[items][0][_item_]"
                        value="" size="60">



                    </div>
                  </td>
                  <td>
                    <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-entity-autocomplete-multiple-items-0-weight form-item-entity-autocomplete-multiple-items-0-weight form-no-label">
                      <label for="edit-entity-autocomplete-multiple-items-0-weight" class="visually-hidden">Item weight</label>


                      <input class="webform-multiple-sort-weight form-number form-control" data-drupal-selector="edit-entity-autocomplete-multiple-items-0-weight"
                        type="number" id="edit-entity-autocomplete-multiple-items-0-weight" name="entity_autocomplete_multiple[items][0][weight]"
                        value="0" step="1" size="10">



                    </div>
                  </td>
                  <td>

                    <input data-drupal-selector="edit-entity-autocomplete-multiple-items-0-operations-add" formnovalidate="formnovalidate" type="image"
                      id="edit-entity-autocomplete-multiple-items-0-operations-add" name="entity_autocomplete_multiple_table_add_0"
                      src="/modules/webform/images/icons/plus.svg" alt="Ajouter" title="Ajouter" class="image-button js-form-submit form-submit">




                    <input data-drupal-selector="edit-entity-autocomplete-multiple-items-0-operations-remove" formnovalidate="formnovalidate"
                      type="image" id="edit-entity-autocomplete-multiple-items-0-operations-remove" name="entity_autocomplete_multiple_table_remove_0"
                      src="/modules/webform/images/icons/ex.svg" alt="Retirer" title="Retirer" class="image-button js-form-submit form-submit">


                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="container-inline">

            <input data-drupal-selector="edit-entity-autocomplete-multiple-add-submit" formnovalidate="formnovalidate" type="submit"
              id="edit-entity-autocomplete-multiple-add-submit" name="entity_autocomplete_multiple_table_add" value="Ajouter"
              class="button js-form-submit form-submit">



            <div class="form-group js-form-item form-item js-form-type-number form-type-number js-form-item-entity-autocomplete-multiple-add-more-items form-item-entity-autocomplete-multiple-add-more-items form-no-label">


              <input data-drupal-selector="edit-entity-autocomplete-multiple-add-more-items" type="number" id="edit-entity-autocomplete-multiple-add-more-items"
                name="entity_autocomplete_multiple[add][more_items]" value="1" step="1" min="1" max="100" class="form-number form-control">



              <span class="field-suffix">more éléments</span>
            </div>
          </div>
        </div>
        <fieldset data-drupal-selector="edit-webform-entity-checkboxes" id="edit-webform-entity-checkboxes--wrapper" class="fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper">
          <legend>
            <span class="fieldset-legend">Entity checkboxes</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-webform-entity-checkboxes" class="js-webform-webform_entity_checkboxes webform-options-display-one-column form-checkboxes">
              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-entity-checkboxes-1 form-item-webform-entity-checkboxes-1">
                <label for="edit-webform-entity-checkboxes-1" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-webform-entity-checkboxes-1" type="checkbox" id="edit-webform-entity-checkboxes-1" name="webform_entity_checkboxes[1]"
                    value="1" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Administrator</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-checkbox form-type-checkbox js-form-item-webform-entity-checkboxes-0 form-item-webform-entity-checkboxes-0">
                <label for="edit-webform-entity-checkboxes-0" class="option custom-control custom-checkbox">

                  <input data-drupal-selector="edit-webform-entity-checkboxes-0" type="checkbox" id="edit-webform-entity-checkboxes-0" name="webform_entity_checkboxes[0]"
                    value="0" class="form-checkbox custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Anonymous</label>
              </div>
            </div>

          </div>
        </fieldset>
        <fieldset data-drupal-selector="edit-webform-entity-radios" id="edit-webform-entity-radios--wrapper" class="fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper">
          <legend>
            <span class="fieldset-legend">Entity radios</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-webform-entity-radios" class="js-webform-webform_entity_radios webform-options-display-one-column">
              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-entity-radios form-item-webform-entity-radios">
                <label for="edit-webform-entity-radios-1" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-entity-radios-1" type="radio" id="edit-webform-entity-radios-1" name="webform_entity_radios"
                    value="1" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Administrator</label>
              </div>

              <div class="form-group js-form-item form-item js-form-type-radio form-type-radio js-form-item-webform-entity-radios form-item-webform-entity-radios">
                <label for="edit-webform-entity-radios-0" class="option custom-control custom-radio">

                  <input data-drupal-selector="edit-webform-entity-radios-0" type="radio" id="edit-webform-entity-radios-0" name="webform_entity_radios"
                    value="0" class="form-radio custom-control-input">

                  <span class="custom-control-indicator"></span>

                  Anonymous</label>
              </div>
            </div>

          </div>
        </fieldset>

        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-entity-select form-item-webform-entity-select">
          <label for="edit-webform-entity-select">Entity select</label>
          <select data-drupal-selector="edit-webform-entity-select" class="webform-entity-select form-select custom-select" id="edit-webform-entity-select"
            name="webform_entity_select">
            <option value="" selected="selected">- Aucun(e) -</option>
            <option value="1">admin</option>
            <option value="8">Admin LNH</option>
            <option value="29">adminlnh</option>
            <option value="7">Webmaster</option>
            <option value="0">Anonymous</option>
          </select>
        </div>

        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-entity-select-multiple form-item-webform-entity-select-multiple">
          <label for="edit-webform-entity-select-multiple">Entity select multiple</label>
          <select class="js-webform-select2 webform-select2 webform-entity-select form-select custom-select" data-drupal-selector="edit-webform-entity-select-multiple"
            multiple="multiple" name="webform_entity_select_multiple[]" id="edit-webform-entity-select-multiple">
            <option value="1">admin</option>
            <option value="8">Admin LNH</option>
            <option value="29">adminlnh</option>
            <option value="7">Webmaster</option>
            <option value="0">Anonymous</option>
          </select>
        </div>
        <fieldset data-drupal-selector="edit-webform-term-checkboxes" class="js-webform-term-checkboxes webform-term-checkboxes webform-term-checkboxes-scroll fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper"
          id="edit-webform-term-checkboxes--wrapper">
          <legend>
            <span class="fieldset-legend">Term checkboxes</span>
          </legend>
          <div class="fieldset-wrapper">
            <div id="edit-webform-term-checkboxes" class="form-checkboxes"></div>

          </div>
        </fieldset>

        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-term-select form-item-webform-term-select">
          <label for="edit-webform-term-select">Term select</label>
          <select data-drupal-selector="edit-webform-term-select" id="edit-webform-term-select" name="webform_term_select" class="form-select custom-select">
            <option value="" selected="selected">- Aucun(e) -</option>
          </select>
        </div>

        <div class="form-group js-form-item form-item js-form-type-select form-type-select js-form-item-webform-term-select-multiple form-item-webform-term-select-multiple">
          <label for="edit-webform-term-select-multiple">Term select multiple</label>
          <select class="js-webform-select2 webform-select2 form-select custom-select" data-drupal-selector="edit-webform-term-select-multiple"
            multiple="multiple" name="webform_term_select_multiple[]" id="edit-webform-term-select-multiple"></select>
        </div>


      </details>
      <details data-webform-key="other_elements" data-drupal-selector="edit-other-elements" id="edit-other-elements" class="js-form-wrapper form-wrapper"
        open="open">
        <summary role="button" aria-controls="edit-other-elements" aria-expanded="true" aria-pressed="true">Other elements</summary>


        <div class="form-group js-form-item form-item js-form-type-language-select form-type-language-select js-form-item-language-select form-item-language-select">
          <label for="edit-language-select">Language select</label>
          <select data-drupal-selector="edit-language-select" id="edit-language-select" name="language_select" class="form-select custom-select">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="und" selected="selected">- Not specified -</option>
            <option value="zxx">- Not applicable -</option>
          </select>
        </div>

        <div class="form-group js-form-item form-item js-form-type-machine-name form-type-machine-name js-form-item-machine-name form-item-machine-name">
          <label for="edit-machine-name" class="js-form-required form-required">Machine name</label>


          <input data-drupal-selector="edit-machine-name" dir="ltr" type="text" id="edit-machine-name" name="machine_name" value=""
            size="60" maxlength="64" class="form-text required form-control" required="required" aria-required="true">



          <small id="edit-machine-name--description" class="description form-text text-muted">
            Un nom unique compréhensible par une machine. Peut seulement contenir des lettres minuscules, chiffres, et tirets-bas (_).
          </small>
        </div>


      </details>


      <input autocomplete="off" data-drupal-selector="form-2wvbsq-z-awmipwuroa86afbz1cauzstj-cyk5ug-y0" type="hidden" name="form_build_id"
        value="form-2wvbsQ_Z_AWmIpWUROA86AFbz1cAUzstj_cyK5ug_Y0">




      <input data-drupal-selector="edit-webform-submission-example-elements-add-form-form-token" type="hidden" name="form_token"
        value="M5Aslk-hffi43WYKSrO5FfTZXbB_vmZc_XD4hkMu9jU">




      <input data-drupal-selector="edit-webform-submission-example-elements-add-form" type="hidden" name="form_id" value="webform_submission_example_elements_add_form">


      <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">

        <input class="webform-button--submit button button--primary js-form-submit form-submit" data-drupal-selector="edit-submit"
          type="submit" id="edit-submit" name="op" value="Submit">



      </div>

      <div data-contextual-id="webform:webform=example_elements:langcode=fr"></div>
    </form>
  </div>
</section>
