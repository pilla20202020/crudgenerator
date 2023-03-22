<?php

use App\Models\Country\Country;
use App\Models\Hr\Employee;
use App\Models\Master\Country as MasterCountry;
use App\Models\Master\District;
use App\Models\Master\Module;
use App\Models\Master\State;
use App\Models\Role;
use App\Models\Settings\OrganizationSettings;
use App\Models\Setting\Setting;
use App\Models\Settings\NotificationSettings;
use App\Models\Settings\UserSettings;
use App\Models\Log\OperationLog;
use App\Models\Log\ErrorLog;
use App\Models\Log\ActivityLog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

function label($text)
//here we will write translator code
//below is only example, we have to use session to check current language setting to use or not using the following dictonary
//this dictonary must be fetched from settings in main application
{
  $dictonary = array(
        // "Command" => "प्रयोग",
        // "Industry Name" => "उद्योगको नाम",
        // "Industry Address" => "उद्योगको ठेगाना",
        // "Phone No" => "फोन नं ",
        // 'Department' => 'विभाग',
        // 'Manager' => 'प्रबन्धक',
        // 'List' => 'सूची',
        // 'Manage' => 'व्यवस्थापन',
        // 'Role' => 'भूमिका',
        // 'Contact' => 'सम्पर्क',
        // 'EMP Id' => 'कर्मचारीको आईडी',
        // 'Employee Id' => 'कर्मचारीको आईडी',
        // 'Add Employee' => 'कर्मचारीको थप्नुहोस्',
        // 'Organization Role' => 'संगठनको भूमिका',
        // 'Employees' => 'कर्मचारीहरु',
        // 'Employee Manage' => 'कर्मचारी व्यवस्थापन',
        // 'S.N.' => 'सि.नं.',
        // 'status' => 'स्थिति',
        // 'Status' => 'स्थिति',
        // 'Action' => 'कार्य',
        // 'Add' => 'थप्नुहोस्',
        // 'Add Department' => 'विभाग थप्नुहोस्',
        // 'Department Name' => 'विभागको नाम',
        // 'Remarks' => 'टिप्पणीहरू',
        // 'remarks' => 'टिप्पणीहरू',
        // 'Edit Department' => 'विभाग सम्पादन गर्नुहोस्',
        // 'First Name' => 'अगाडिको नाम',
        // 'Middle Name' => 'विचको नाम',
        // 'Last Name' => 'अन्तिमको नाम',
        // 'Gender' => 'लिङ्ग',
        // 'gender' => 'लिङ्ग',
        // 'Date Of Birth' => 'जन्म मिति',
        // 'Nationality' => 'राष्ट्रियता',
        // 'Email Address' => 'ईमेल ठेगाना',
        // 'Password' => 'पासवर्ड',
        // 'Employee' => 'कर्मचारी',
        // 'Phone Number' => 'फोन नं.',
        // 'Country Name' => 'देश',
        // 'State Name' => 'प्रदेश',
        // 'District Name' => 'जिल्ला',
        // 'City Name' => 'शहर',
        // 'Permanent Address' => 'स्थाही ठेगाना',
        // 'Temporary Address' => 'अस्थाही ठेगाना',
        // 'Employee Name' => 'कर्मचारीको नाम',
        // 'Personal Details' => 'व्यक्तिगत विवरण',
        // 'Leave Application' => 'छुट्टि निवेदन',
        // 'Leave Type' => 'छुट्टिको प्रकार',
        // 'Number Of Leave(Annually)' => 'छुट्टिको संख्या(वार्षिक)',
        // 'Designation' => 'पद',
        // 'Reporting To' => 'रिर्पोट गर्ने',
        // 'Skills' => 'सीपहरू',
        // 'User Role' => 'प्रयोगकर्ता भूमिका',
        // 'Address Details' => 'ठेगानाको विवरण',
        // 'Employee Name' => 'कर्मचारीको नाम',
        // 'Is Head' => 'विभाग प्रमुख',
        // 'Join Date' => 'सामेल मिति',
        // 'Govt. Pan No.' => 'सरकारी पान नं.',
        // '1' => '१',
        // 'Search' => 'खोज्नुहोस्',
        // 'Yes' => 'हुन्छ',
        // 'No' => 'हुँदैन',
        // 'country' => 'देश',
        // 'Country' => 'देश',
        // ' Industry Name ' => ' उद्योगको नाम ' ,
        // ' Industry Address Tol ' => ' उद्योगको ठेगाना टोल  ' ,
        // ' Municipality VDC ' => ' न.पा. /गा.बि.स  ' ,
        // ' District ' => ' जिल्ला  ' ,
        // ' Address ' => ' ठेगाना  ' ,
        // ' Industry Type ' => ' उद्योग किसिम ' ,
        // ' Name ' => ' नाम ' ,
        // ' Lastname ' => ' थर ' ,
        // ' Address ' => ' ठेगाना ' ,
        // ' Father Name ' => ' बाबुको नाम ' ,
        // ' Grandfather Name ' => ' बाजेको नाम ' ,
        // ' Permanent Address ' => ' स्थायी ठेगाना ' ,
        // ' Temporary Address ' => ' अस्थायी ठेगाना ' ,
        // ' Raw product name ' => ' खाद्य पदार्थको नाम ' ,
        // ' Packing Size ' => ' प्याकिङ साइज ' ,
        // ' Machine for Industry ' => ' उद्योगको लागि चाहिने मेशिनरी ' ,
        // ' industryManageOne ' => ' प्राविधिक शिप  ' ,
        // ' Lab Management ' => ' प्रयोगसालाको बेवोस्था ' ,
        // ' Lab Works ' => ' प्रयोगसाला भएमा विशेषण गरिने प्यारामीटरहरु ' ,
        // ' Industry Capital ' => ' उद्योगको लागत  ' ,
        // ' Industry Capicity ' => ' उद्योगको क्षमता  ' ,
        // ' Applicant Name ' => ' निवेदक नाम ' ,
        // ' Applicant Address ' => ' निवेदक ठेगाना  ' ,
        // ' Paper No. ' => ' पत्र संख्या  ' ,
        // ' Chalani No. ' => ' च.न. ' ,
        // ' Date ' => ' मिति  ' ,
        // ' Industry Work ' => ' उद्योगको कार्य  ' ,
        // ' Industry Owner Name ' => ' उद्योगपतिको नाम ' ,
        // ' Recommendation Date ' => ' सिफारिस मिति ' ,
        // ' Others ' => ' अन्य ' ,
        // ' Sample Details ' => ' नमुना विवरण ' ,
        // ' Invoice Date ' => ' चलानी मिति ' ,
        // ' Sample Registration Date ' => ' नमुना दर्ता मिति ' ,
        // ' Sample Code ' => ' नमुगा कोड ' ,
        // ' Packing Condition ' => ' प्याकेजिड् अबस्था ' ,
        // ' Analysis Required ' => ' बिश्लेषण आवश्शक ' ,
        // ' Analysis Start Date ' => ' विश्लेषण सुरु मिति ' ,
        // ' analysisEndDate ' => ' बिश्लेषण समाप्त मिति ' ,
        // ' industryAddress ' => ' ठेगाना ' ,
        // ' enrollmentDate ' => ' दाखिला मिति ' ,
        // ' submissionDate ' => ' पेशगरेको मिति ' ,
        // ' nameOfInspector ' => ' निरीक्षकको नाम ' ,
        // ' dateOfInspection ' => ' निरीक्षण गरेको मिति ' ,
        // ' correctionDate ' => ' सुधार मिति ' ,
        // ' certificateNo ' => ' प्रमाणपत्र नं ' ,
        // ' dissatisfaction ' => ' असन्तोष ' ,
        // ' satisfaction ' => ' सन्तोष ' ,
        // ' Food Name ' => ' खाद्य पदार्थको नाम ' ,
        // ' Label Name ' => ' लेबलमा उल्लेख भएको नाम ' ,
        // ' Packing Size ' => ' प्याकिंग साइज ' ,
        // ' License Number ' => ' अनुज्ञापत्र नम्बर ' ,
        // ' Date ' => ' मिति ' ,
        // ' Indutry Name ' => ' उद्योगको नाम ' ,
        // ' Owner Last Name ' => ' उद्योगपतिको थर ' ,
        // ' Industry Work Hadling Person Firstname and Lastname ' => ' उद्योगको कारवाहीका लागि जिम्मा लिने व्यक्तिको नाम र थर ' ,
        // ' Grand Father Name ' => ' बाजेको नाम ' ,
        // ' Substance name to produce sell and distribute ' => ' उत्पादन तथा बिक्री वितरण गर्न चाहेको खाद्य पदार्थको नाम ' ,
        // ' Signature ' => ' हस्ताक्षर ' ,
        // ' Finger Prints ' => ' औठाको छाप  ' ,
        // ' Director General ' => ' महानिर्देशक ' ,
        // ' other ' => ' अन्य ' ,
        // ' Sample Referance Number ' => ' नमुना संकेत नम्बर ' ,
        // ' Sample description of food and materials ' => ' खाघ पदार्थ/दाना पदार्थको नमुना विवरण ' ,
        // ' Parameter to be tested ' => ' परिक्षण गर्नुपर्ने पारामिटर ' ,
        // ' Examination Fee ' => ' परिक्षण दस्तुर रु ' ,
        // ' Revenue Received ' => ' राजस्व रसिद ' ,
        // ' dateOfRemittanceRevenue ' => ' राजस्व बुझाएको मिति ' ,
        // ' Industry Name ' => ' उद्योगको नाम ' ,
        // ' Name of Industrialist ' => ' उद्योगपतिको नाम ' ,
        // ' Name of Management ' => ' व्यवस्थापनको नाम ' ,
        // ' Industry Establishment Year ' => ' उद्योग स्थापना वर्ष ' ,
        // ' Small and Domestic ' => ' सानो तथा घरेलु ' ,
        // ' Medium ' => ' मझौला ' ,
        // ' Big ' => ' ठुलो ' ,
        // ' Taken ' => ' लिएको ' ,
        // ' Not Taken ' => ' नलिएको ' ,
        // ' Renovated ' => ' नबिकरण गरेको ' ,
        // ' Unrefined ' => ' नबिकरण नगरेको ' ,
        // ' Technical ' => ' प्राबिधिक ' ,
        // ' Administrative ' => ' प्रशासनिक ' ,
        // ' S.N. ' => ' सी.न. ' ,
        // ' Goods Produced ' => ' उत्पादित वस्तु ' ,
        // ' brandOne ' => ' ब्रान्ड ' ,
        // ' Consumable Period ' => ' उपभोग्य अवधि ' ,
        // ' Sales distribution Area ' => ' विक्री वितरण गर्ने क्षेत्र ' ,
        // ' Packing Method ' => ' प्याकजिंग तरिका ' ,
        // ' Full Name of Industry, Address ' => ' उद्योगको पुरा नाम, ठेगाना ' ,
        // ' Date of manufacture ' => '  उत्पादन मिति ' ,
        // ' Batch Number ' => ' ब्याच न ' ,
        // ' Use by date ' => ' उपभोग्य मिति ' ,
        // ' Storage of raw materials ' => ' कचा पदार्थको सम्म्रिचन ' ,
        // ' Capacity of industry ' => ' उद्योगको क्षमता ' ,
        // ' Method of Use ' => ' प्रयोग बिधि ' ,
        // ' Health and nutrition claims ' => '  स्वास्थ्य तथा पोषण सम्बन्धि दावी ' ,
        // ' Health and nutrition claims Approved ' => ' स्वास्थ्य तथा पोषण दाबी स्वीकृत भयको ' ,
        // ' Level 1/1 sample of food intem for production of approved health and nutrition claims ' => ' उत्पादिन खाद्य वस्तुको लेवल नमुना १ / १ प्रति ' ,
        // ' Cleanliness ' => ' सरसफाई ' ,
        // ' Temperature ' => ' तापक्रम ' ,
        // ' Animal Control ' => ' चरा, मुसा, झिंगा, किरा नियन्त्रण ' ,
        // ' Personnel personal hygine ' => ' कर्मचारी व्यक्तिगत सरसफाई ' ,
        // ' Industry living Area ' => ' उद्योग रहने क्षेत्र ' ,
        // ' Condition of bathroom and toilet ' => ' बाथरूम तथा चर्पीको अवस्था ' ,
        // ' Product raw state ' => ' उत्पादन कच्याको अवस्था ' ,
        // ' Source ' => ' स्रोत ' ,
        // ' Paramaters to be determined ' => ' परिचंद गरिने पारामीटरहरु ' ,
        // ' Where to experiment incase of no proper laboratory ' => ' प्रयोगशाला नभय कहाँ परिचंद गर्ने गरिएको ' ,
        // ' compiled sample statement ' => ' संकलित नमुना विवरण ' ,
        // ' Overall Assessment ' => ' समग्र मुल्यांकन ' ,
        // ' Fee Date ' => ' निरिच्याद मिति ' ,
        // ' Toll ' => ' टोल ' ,
        // ' Municipality VDC ' => ' न.पा / ग.बि.स ' ,
        // ' District ' => ' जिल्ला ' ,
        // ' Phone ' => ' फोन नं ' ,
        // ' Types of industry Forums ' => ' उद्योग फोरम को किसिम ' ,
        // ' Industrialist Name ' => ' उद्योगपतिको नाम ' ,
        // ' Grand Father Name ' => ' बजेको नाम ' ,
        // ' Packing Size ' => ' प्यकिङ्ग साइज ' ,
        // ' Brand ' => ' ब्राण्ड / मार्का ' ,
        // ' Provision of skilled manpower ' => ' दक्ष्य जनशक्तिको व्यवस्था: ' ,
        // ' Paramaters to be analyzed in laboratory ' => ' प्रयोगशाला भएमा विश्लेषण गरिने प्यारामीटरहरु  ' ,
        // ' Types of raw materials source ' => ' कचा पदार्थको किसिम स्रोत  ' ,
        // ' Product Market  ' => ' उत्पादित पदार्थको बजार  ' ,
        // ' Cost of industry ' => ' उद्योगको लागत ' ,
        // ' Full copy of license issued ' => ' जारी भएको अनुज्ञापत्र सक्कली प्रति ' ,
        // ' Cash receipt of revenue receipt ' => ' राजस्व दस्तुर बुझाएको नगदी रशिद ' ,
        // ' If additions are made to the details of the food products produced description  ' => ' उत्पादिन खाद्य पदार्थ बिवरणमा थपघट गर्नु परेमा सोको बिवरण ' ,
        // ' Level 1/1 sample of food item produced ' => ' उत्पादिन खाद्य वस्तुको लेवल नमुना १ / १ प्रति ' ,
        // ' A sample of food items to be produced ' => ' उत्पादिन खाद्य वस्तुको नमुना ' ,
        // ' Photocopy / Photocopy of certtificate ' => ' घरेलु तथा साना उद्योग कार्यालयको उद्योग दर्ता प्रमाण पत्रको फोटोकपी / छाँयाप्रति ' ,
        // ' Raw ' => ' खाद्य  ' ,
        // ' Product ' => ' पदार्थको ' ,
        // ' Start ' => ' सुरु ' ,
        // ' Voucher Number ' => ' भौचर नम्बर ' ,
        // ' Overall ' => ' समग्र  ' ,
        // '  Assessment ' => ' मुल्यांकन ' ,
        // ' Internal ' => ' अन्तरिक ' ,
        // ' External ' => ' बाह्र्य ' ,
        // 'foodindustryinspectionreport.' => 'खाद्य उद्योग निरीक्षण रिपोर्ट',
        // 'List' => 'सूची',
        // 'Add' =>'थप्नुहोस्',
    );
    if (array_key_exists($text, $dictonary)) $text = $dictonary[$text];
    echo $text;
}
function pre($data)
{
?>
    <pre>
        <?php print_r($data); ?>
    </pre>

<?php
}

function nullableFields($table)
{
    $columns = DB::select("describe $table");
    unset($columns[0]);
    foreach ($columns as $column) {
        if ($column->Type == "varchar(255)") {
            $q = "ALTER TABLE $table CHANGE $column->Field $column->Field VARCHAR(255) NULL DEFAULT NULL";
            //echo $q;die;
            DB::select($q);
        }
        if ($column->Type == "text") {
            $q = "ALTER TABLE $table CHANGE $column->Field $column->Field text NULL DEFAULT NULL";
            //echo $q;die;
            DB::select($q);
        }
        if ($column->Type == "int(11)") {
            $q = "ALTER TABLE $table CHANGE $column->Field $column->Field int(11) NULL DEFAULT NULL";
            //echo $q;die;
            DB::select($q);
        }
        if ($column->Type == "date") {
            $q = "ALTER TABLE $table CHANGE $column->Field $column->Field date NULL DEFAULT NULL";
            //echo $q;die;
            DB::select($q);
        }
    }
}



function createInput($type, $name, $id, $display, $class = "", $value = "", $placeHolder = "", $min = "")
{
    $display = trans('lang.' . $display);
?>
    <label for="<?php echo $id; ?>" class="<?php echo $class; ?>">
        <?php echo label($display); ?>
    </label>
    <input type="<?php echo $type; ?>" id="<?php echo $id; ?>" min="<?php echo $min; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value ? $value : ''; ?>">
<?php
}
?>
<?php
function createPassword($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "")
{
    $display = trans('lang.' . $display);
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
    <div class="form-control-wrap">
        <input type="password" id="<?php echo $id; ?>" <?php echo $readonly; ?> placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
    </div>
<?php
}
?>
<?php
function createEmail($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "")
{
    $display = trans('lang.' . $display);
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
    <div class="form-control-wrap">
        <input type="email" id="<?php echo $id; ?>" <?php echo $readonly; ?> placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
    </div>
<?php
}
?>

<?php
function createText($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "")
{
    $display = trans('lang.'.$display);
    // $add = trans('lang.Add');
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
    <div class="form-control-wrap">
        <input type="text" id="<?php echo $id; ?>" <?php echo $readonly; ?> placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
    </div>
<?php
}
?>

<?php
function createTextValidation($name, $id, $display, $class = "", $value = "", $placeHolder = "", $readonly = "", $required = "")
{
    $display = trans('lang.'.$display);
    // $add = trans('lang.Add');
?>
    <div class="wizard-form-error">* <?php echo label($display); ?> Requried</div>
    <label for="<?php echo $id; ?>" class="wizard-form-text-label"><?php echo label($display); ?></label>
    <input type="text"  id="<?php echo $id; ?>" <?php echo $readonly; ?>  placeholder="<?php echo $placeHolder; ?>" class="form-control <?php $class; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php echo $required; ?>>
<?php
}
?>



<?php
function createNumber($name, $id, $display, $class = "", $value = "", $placeHolder = "")
{
    $display = trans('lang.' . $display);
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
    <input type="number" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
<?php
}
?>

<?php
function createHidden($name, $id, $display, $class = "", $value = "", $placeHolder = "")
{
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
    <input type="hidden" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
<?php
}
?>

<?php
function createColor($name, $id, $display, $class = "", $value = "", $placeHolder = "")
{
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>
    <input type="color" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
<?php
}
?>

<?php
function createDate($name, $id, $display, $class = "", $value = "", $placeHolder = "")
{
    $display = trans('lang.' . $display);
?>
    <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo $display; ?> </label>
    <input type="date" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control <?php $class; ?>" value="<?php echo $value; ?>">
<?php
}
?>

<?php
function createRadio($name, $id, $class = "", $values = array(),$display=null)
{
?>
    <?php $sn = 0;
    for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
        $d = $values[$i];
        $d = $display ? $display : $d;
        $d = trans('lang.' . $d);
        $v = $values[$i];
        $sn++; ?>
        <?php if ($d != "") : ?> <div class="d-flex justify-content-left align-items-center form-check form-check-inline"> <input type="radio" id="<?php echo $id . $sn; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $v; ?>"><label for="<?php echo $id . $sn; ?>" class="form-label col-form-label ms-2 mt-1"> <?php echo $d; ?> </label><?php endif; ?>
            </div>
        <?php endfor; ?>

    <?php
}
    ?>


    <?php
    //Another Radio for non bolds
    function createRadio2($name, $id, $class = "", $values = array())
    {
    ?>

        <?php $sn = 0;
        for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
            $d = $values[$i][1];
            $sn++; ?>
            <?php if ($d != "") : ?> <div class="d-flex justify-content-left align-items-center form-check form-check-inline"> <input type="radio" id="<?php echo $id . $sn; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $v; ?>"><label for="<?php echo $id . $sn; ?>" class="form-label col-form-label ms-2 mt-1"> <?php echo $d; ?> </label><?php endif; ?>
                </div>

            <?php endfor; ?>

        <?php
    }
        ?>


        <?php
        //Select Dropdown
        function createSelect($name, $id, $class = "", $display, $values = array())
        {
        ?>
            <select class="js-select <?php $class; ?>" name="<?php echo $name; ?>" aria-label="Default select example" data-search="true" data-sort="false">
                <option value="">Select Option</option>
                <?php $sn = 0;
                for ($i = 0; $i < sizeof($values); $i++) : $v = $values[$i][0];
                    $d = isset($values[$i]) ? $values[$i] : "";
                    $sn++; ?>

                    <option value="<?php echo $v; ?>"><?php echo ($d) ? $d : $v; ?></option>

                <?php endfor; ?>
            </select>

        <?php
        }
        function customCreateSelect($name, $id, $class = "form-control", $display, $values = array(), $keyValue = '')
        {
            $display = trans('lang.' . $display);
            // $add = trans('lang.Add');
        ?>

            <label for="<?php echo $id; ?>" class="form-label col-form-label"> <?php echo label($display); ?> </label>

            <select class="form-select <?php echo $class ?>" name="<?php echo $name; ?>" id="<?php echo $name; ?>" aria-label="Default select example">
                <option value="">Select Option</option>
                <?php foreach ($values as $key => $value) { ?>
                    <option value="<?= $key ?>" <?php echo $keyValue == $key ? 'selected' : '' ?>><?= $value ?></option>
                <?php } ?>
            </select>





            <!-- <div class="input-group">
                <button class="btn btn-outline-primary" type="button">Button</button>
                <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                     <option selected>Choose...</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                    </select>
                </div> -->



        <?php            }
        //End of Select
        ?>



        <?php
        //Create Checkbox
        function createCheck($name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {   $display = trans('lang.' . $display);
        ?>
            <div class="form-check">
                <input type="checkbox" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-check-input <?php $class; ?>" value="<?php echo $value; ?>">
                <label for="<?php echo $id; ?>" class="form-check-label"> <?php echo $display; ?> </label>
            </div>
        <?php
        }
        ?>


        <?php
        //for label
        function createLabel($for = "", $class = "", $display)
        {     $display = trans('lang.' . $display);

            // $add = trans('lang.Add');
        ?>
            <label for="<?php echo $for; ?>" class="<?php echo $class; ?>">
                <?php echo label($display); ?>
            </label>
        <?php
        }
        ?>

        <?php

        function actionButton($name, $display = "", $url, $class = "", $extra = "")
        {
        ?>
            <a href="<?php echo $url; ?>" name="<?php echo $name; ?>" data-title="<?php echo $name; ?>" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft <?php echo $class; ?>" <?php echo $extra; ?>><?php echo $display; ?></a>
        <?php
        }

        function actionCanvasButton($name = "", $class = "", $dataTarget = "", $iconClass = "", $route = "", $id)
        {
        ?>

            <?php if ($iconClass == "edit") {
            ?>
                <button class="btn btn-color-primary btn-hover-primary btn-icon btn-soft <?php echo $class; ?>" name="<?php echo $name; ?>" data-route="<?php echo route($route, $id); ?>" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $dataTarget; ?>"> <em class="icon ni ni-<?php echo $iconClass; ?>"></em></button>
            <?php
            } else {
            ?>
                <button class="btn btn-color-success btn-hover-success btn-icon btn-soft <?php echo $class; ?>" name="<?php echo $name; ?>" data-route="<?php echo route($route, $id); ?>" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $dataTarget; ?>"> <em class="icon ni ni-<?php echo $iconClass; ?>"></em></button>

            <?php
            }
            ?>


        <?php
        }

        //delete
        function deleteCanvasButton($name = "", $class = "btn-hover-danger", $route = "", $id)
        {
        ?>
            <button type="button" data-route="<?php echo route($route, $id); ?>" class="btn btn-color-danger <?php echo $class; ?>  btn-icon btn-soft"><em class="icon ni ni-trash"></em></button>
        <?php
        }
        //for button
        function createButton($class = "", $type = "", $display)
        {
        ?>
            <button class="mt-3 btn btn-primary  <?php echo $class; ?>" type="submit">
                <?php echo $display ?>
            </button>
            <?php
        }

        function createCanvasButton($class = "", $type = "", $display, $route)
        {
            $display = trans('lang.' . $display);
            $add = trans('lang.Add');
            if (App::getLocale() == 'ne') {
            ?>
                <button class="mt-3 btn btn-primary  <?php echo $class; ?>" data-route="<?php echo route($route); ?>" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas"> <em class="icon ni ni-plus"></em> <?php echo $display ?> <?php echo $add ?>
                </button>
            <?php
            } else {
            ?>
                <button class="mt-3 btn btn-primary  <?php echo $class; ?>" data-route="<?php echo route($route); ?>" data-bs-toggle="offcanvas" data-bs-target="#addOffcanvas"> <em class="icon ni ni-plus"></em><?php echo $add ?> <?php echo $display ?>
                </button>
        <?php
            }
        }
        ?>


            <?php
                function createTextArea($name, $class = "", $id = "", $row = "", $display = "")
                {
                ?>
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <textarea class="form-control text-area" name="<?php echo $name;?>" id="<?php echo $id;?>" rows="<?php echo $row;?>"><?php if(isset($display)){echo strip_tags($display);} ?></textarea>
                        </div>
                    </div>

                <?php
                }
            ?>

        <?php
        function inputwithbottommargin($type, $name, $id, $display, $class = "", $value = "", $placeHolder = "")
        {
        ?>
            <input type="<?php echo $type; ?>" id="<?php echo $id; ?>" placeholder="<?php echo $placeHolder; ?>" name="<?php echo $name; ?>" class="form-control mb-2" value="<?php echo $value; ?>">
        <?php
        }
        ?>

        <?php
        function master_getColumn($tableName)
        {
            return Schema::getColumnListing($tableName);
        }

        function master_storeColumn($tableName, $data)
        {
            $allcolumns = Schema::getColumnListing($tableName);

            $datakey = array_keys($data);
            // dd($allcolumns, $data);
            foreach ($data as $key => $value) {
                if (in_array($key, $allcolumns)) {
                    DB::table($tableName)->insert($data);
                    return true;
                }
            }
        }

        function master_updateColumn($tableName, $data, $id)
        {
            $TablePK = mid($tableName, 4) . "_id";
            $allcolumns = Schema::getColumnListing($tableName);

            $datakey = array_keys($data);
            // dd($allcolumns, $data);
            foreach ($data as $key => $value) {
                if (in_array($key, $allcolumns)) {
                    DB::table($tableName)->where($tablePK, $id)->update($data);
                    return true;
                }
            }
        }

        function getForeignTable($all_columns)
        {
            $string = '_id';
            $foreign = [];
            foreach ($all_columns as $key => $column) {
                if (str_contains($column, $string) !== FALSE) { // Yoshi version
                    $foreign[] = $column;
                }
            }
            unset($foreign[0]);
            $strArray = [];
            foreach ($foreign as $key => $foreignKey) {
                $strArray[$key] = explode('_id', $foreignKey);
                unset($strArray[$key][1]);
            }
            if ($strArray) {
                $all_Foreign_Key_Table = call_user_func_array('array_merge', $strArray);
                foreach ($all_Foreign_Key_Table as $column) {
                    $tableName[] = "tbl_" . $column;
                }
                return $tableName;
            } else {
                return [];
            }
        }

        /**
         * $tableName = Name of table
         * $pk = primary key of table
         * $name = table select column name
         * $class = extra class
         * $data = Existing data or for edit case showing selected data
         * $display = Displaying name or showing label name.
         */
        function getSelectForForeignColumn($tableName = "", $pk, $name, $class = "", $data = null, $display = null)
        {
            $systems =  DB::table($tableName)->where('status', '<>', -1)->orderBy($pk, 'asc')->pluck($name, $pk);
            if (!$data) {
                customCreateSelect($pk, $pk, null, $display ?? $name, $systems, null);
            } else {
                customCreateSelect($pk, $pk, null, $display ?? $name, $systems, $data->$pk);
            }
        }



        function usersetting($query)
        {
            $usersetting = UserSettings::fetch($query)->where('user_id', auth()->user()->id)->first();
            return $usersetting ? $usersetting->value : null;
        }

        function organizationSetting($query)
        {
            $organizationSetting = OrganizationSettings::fetch($query)->first();
            return $organizationSetting ? $organizationSetting->value : null;
        }

        function notificationSetting($query)
        {
            $notificationSetting = NotificationSettings::fetch($query)->first();
            return $notificationSetting ? $notificationSetting->value : null;
        }

        function includeHelper()
        {
        }

        function getAjaxCreateModalContent($controllerName)
        {
            return "App\http\Controllers\\$controllerName"::getAjaxContent('create');
        }

        /**
         * ---------------------------------------------
         * |            Country                         |
         * ----------------------------------------------
         */
        // function getCountries()
        // {
        //     return Country::getCountries();
        // }

        /**
         * ---------------------------------------------
         * |            State                         |
         * ----------------------------------------------
         */
        function getStates()
        {
            return State::getStates();
        }

        function getStatesByCountryId($country_id)
        {
            return State::getStatesByCountryId($country_id);
        }

        /**
         * ---------------------------------------------
         * |            District                        |
         * ----------------------------------------------
         */
        function getDistricts()
        {
            return District::getDistricts();
        }

        function getDistrictsByStateId($state_id)
        {
            return District::getDistrictsByStateId($state_id);
        }

        //Generate Slug

        function slugify($text, string $divider = '-')
        {
            // replace non letter or digits by divider
            $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

            // transliterate
            // $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);

            // trim
            $text = trim($text, $divider);

            // remove duplicate divider
            $text = preg_replace('~-+~', $divider, $text);

            // lowercase
            $text = strtolower($text);

            if (empty($text)) {
                return 'n-a';
            }

            return $text;
        }

        function getRoles()
        {
            return Role::whereNotIn('id', [1])->get();
        }
        function getEmployees()
        {
            return Employee::where('status', '<>', '-1')->get();
        }

        function getModules()
        {
            return Module::where('status', '<>', '-1')->where('module_id', '<>', '1')->get();
        }

        function getReportingTo($department_id)
        {
            return Employee::where('status', '<>', -1)->where('department_id', $department_id)->where('is_head', 'manager')->orderBy('created_at', 'desc')->get();
        }

        function getEmployeeHasNoLogin()
        {
            return Employee::where('status', '<>', -1)->where('is_login', 0)->get();
        }

         //get unique Operation number
         function getOperationNumber()
         {
             $startNumber = date('YmdHis') . rand(1000, 9999);
             $isExists = OperationLog::where('operation_end_no', $startNumber)->first();
             while ($isExists) {
                 $startNumber = date('YmdHis') . rand(1000, 9999);
                 $isExists = OperationLog::where('operation_end_no', $startNumber)->first();
             }
             return $startNumber;
         }

         /**
          * function createLog(operation start number, operation end number, model class full name with path,model Id for create and upodate operation, operation Name, previous values in array, new values in array);
          */
         function createOperationLog($startOperationNumber, $endOperationNumber, $modelName, $modelId, $operationName, $previousValues, $newValues)
         {
             $operationId = getOperationNumber();
             $user_id = auth()->user()->id;
             OperationLog::create([
                 'user_id' => $user_id,
                 'operation_start_no' => $startOperationNumber,
                 'operation_end_no' => $endOperationNumber,
                 'model_name' => $modelName,
                 'model_id' => $modelId,
                 'operation_name' => $operationName,
                 'previous_values' => $previousValues ? json_encode($previousValues) : null,
                 'new_values' => $newValues ? json_encode($newValues) : null,
             ]);
         }

         function createErrorLog($controllerName, $methodName, $errors)
         {
             $user_id = auth()->user()->id;
             ErrorLog::create([
                 'user_id' => $user_id,
                 'controller_name' => $controllerName,
                 'method_name' => $methodName,
                 'errors' => $errors,
             ]);
         }

         function createErrorParagraph($name, $class = null)
         {
             echo "<p id='error_$name' class='text-danger custom-error $class'></p>";
         }

         function createActivityLog($controllerName, $methodName, $activity)
         {
             $user_id = auth()->user()->id;
             ActivityLog::create([
                 'user_id' => $user_id,
                 'controllerName' => $controllerName,
                 'methodName' => $methodName,
                 'actionUrl' => request()->fullUrl(),
                 'activity' => $activity,
             ]);
         }

        //  File Upload
        function uploadCommonFile($location, $file, $path,$existingPath=null)
        {
            // dd($file->getClientOriginalExtension());
            $rand = mt_rand(1,9999);
            if ($file) {
                if($existingPath){
                    if (Storage::exists('public/' . $existingPath)) {
                        Storage::delete('public/' .$existingPath);
                    }
                }
                // generate a new filename. getClientOriginalExtension() for the file extension
                $filename = $path . $rand . time() . '.' . $file->getClientOriginalExtension();
                // save to storage/app/photos as the new $filename
                $path = $file->storeAs($location, $filename,'public');
                return $path;
            }
        }

        function correspondingNepaliNumber($num)
        {
            switch($num)
            {
                case 0:
                    return '०';
                break;
                case 1:
                    return '१';
                break;
                case 2:
                    return '२';
                break;
                case 3:
                    return '३';
                break;
                case 4:
                    return '४';
                break;
                case 5:
                    return '५';
                break;
                case 6:
                    return '६';
                break;
                case 7:
                    return '७';
                break;
                case 8:
                    return '८';
                break;
                case 9:
                    return '९';
                break;
                default:
                return '';

            }
        }
        function getNepaliNumber($number){
            $number = str_replace(' ','',$number);
            if(isset($number) && is_numeric($number)){
                $number = str_split($number);
                $nepaliNumber = '';
                foreach($number as $num){
                    $nepaliNumber .= correspondingNepaliNumber($num);
                }
                return $nepaliNumber;
            }else{
                return false;
            }
        }

        function convertNumAccToLang($num)
        {
            if (App::getLocale() == 'ne'){
                return getNepaliNumber($num);
            }else{
                return $num;
            }
        }
        ?>
