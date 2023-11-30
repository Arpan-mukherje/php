<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <style>
      .td1 {
        padding-bottom: 10px;
      }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>My Resume</title>
  </head>
  <body>
    <table style="width:60%; border:2px solid black; margin-top:5%; text-align:center" align="center">
      <tr>
        <td>
          <h2>
            <u>BIO-DATA</u>
          </h2>
          <form action="#" method="get" enctype="multipart/form-data">
            <table align="center" style="width:70%; font-size:18px; margin:10px; text-align:left; margin-left:10%; margin-top:5%" border="0">
              <tr>
                <td class="td1" width="25%">Name</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="text" id="name" name="name" />
                </td>
                <td rowspan="4">
                  <h4>Upload your Image here</h4>
                  <input width="100px" type="file" id="p_img" name="p_img" />
                </td>
              </tr>
              <tr>
                <td class="td1">Father's Name</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="text" id="f_name" name="f_name" />
                </td>
              </tr>
              <tr>
                <td class="td1">Mother's Name</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="text" id="m_name" name="m_name" />
                </td>
              </tr>
              <tr>
                <td width="15%">Permanent Adress</td>
                <td width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                  <textarea id="address" name="address" cols="21" rows="3"></textarea>
                </td>
              </tr>
              <tr>
                <td class="td1">Contact no./Mobile</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="tel" id="mob" name="mob" maxlength="10" placeholder="000-000-0000" />
                </td>
              </tr>
              <tr>
                <td class="td1">Date of Birth</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="date" id="birth" name="birth">
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1">National Id</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="number" id="n_id" name="n_id" placeholder="XXXX-XXXX-XXXX" />
                </td>
                <td colspan="2"></td>
              </tr>
              <tr>
                <td class="td1">Email</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="email" id="email" name="email" placeholder="abcd@gmail.com" />
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1">Religion</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="text" id="region" name="region" />
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1">Nationality</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="text" id="nationality" name="nationality" />
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1">Maritial Status</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1">
                  <input type="text" id="m_status" name="m_status" />
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1">Educaton Qualification</td>
                <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="td1"></td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1" colspan="4">
                  <table border="1" style="font-size:15px" align="center">
                    <tr>
                      <th width="25%">Name of Exam</th>
                      <th width="15%">Year of Passing</th>
                      <th width="35%">Board/University</th>
                      <th width="35%">Percent/GPA</th>
                    </tr>
                    <tr>
                      <td width="25%">
                        <input type="text" id="1st_noe" name="1st_noe" placeholder="Enter Highest Qualification" />
                      </td>
                      <td width="15%">
                        <input type="number" id="1st_yop" name="1st_yop" placeholder="Enter Qualification Year" />
                      </td>
                      <td width="35%">
                        <input type="text" id="1st_board" name="1st_board" placeholder="Enter Board/Uni. Name" />
                      </td>
                      <td width="35%">
                        <input type="number" id="1st_num" name="1st_num" placeholder="Enter Percentage/GPA" />
                      </td>
                    </tr>
                    <tr>
                      <td width="25%">
                        <input type="text" id="2nd_noe" name="2nd_noe" placeholder="Enter 2nd Highest 
Qualification" />
                      </td>
                      <td width="15%">
                        <input type="number" id="2nd_yop" name="2nd_yop" placeholder="Enter Qualification 
Year" />
                      </td>
                      <td width="35%">
                        <input type="text" id="2nd_board" name="2nd_board" placeholder="Enter Board/Uni. 
Name" />
                      </td>
                      <td width="35%">
                        <input type="number" id="2nd_num" name="2nd_num" placeholder="Enter 
Percentage/GPA" />
                      </td>
                    </tr>
                    <tr>
                      <td width="25%">
                        <input type="text" id="3rd_noe" name="3rd_noe" placeholder="Enter 3rd Highest 
Qualification" />
                      </td>
                      <td width="15%">
                        <input type="number" id="3rd_yop" name="3rd_yop" placeholder="Enter Qualification 
Year" />
                      </td>
                      <td width="35%">
                        <input type="text" id="3rd_board" name="3rd_board" placeholder="Enter Board/Uni. Name" />
                      </td>
                      <td width="35%">
                        <input type="number" id="3rd_num" name="3rd_num" placeholder="Enter 
Percentage/GPA" />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>Computer Knowledge</td>
                <td width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                  <textarea id="knowledge" name="knowledge" cols="21" rows="3"></textarea>
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td>Work Experience</td>
                <td width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                  <textarea id="work_experience" name="work_experience" cols="21" rows="3"></textarea>
                </td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td width="15%">
                  <u>
                    <b>Declaration:</b>
                  </u>
                </td>
                <td width="15%" style="text-align:right"></td>
                <td></td>
                <td colspan=""></td>
              </tr>
              <tr>
                <td class="td1" colspan="4">
                  <textarea id="self_declaration" name="self_declaration" cols="100" rows="3"></textarea>
                </td>
              </tr>
              <tr>
                <td width="15%">
                  <b>Place:</b>
                  <input type="text" id="place" name="place" />
                </td>
                <td width="15%" style="text-align:right">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="text-align:center"></td>
                <td colspan="">Upload Your Sigature here </td>
              </tr>
              <tr>
                <td width="15%">
                  <b>Date:</b>
                  <input type="date" id="m_status" name="m_status" />
                </td>
                <td width="15%" style="text-align:right">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="text-align:right"></td>
                <td colspan="">
                  <input type="file" id="sign" name="sign" />
                </td>
              </tr>
              <tr>
                <td class="td1"></td>
                <td class="td1" width="15%" style="text-align:right;"></td>
                <td class="td1">
                  <input type="Submit" id="submit" name="submit" value="Submit" />
                  <input style="margin-top:10px; text-align:left" type="reset" id="reset" name="reset" value="Reset" />
                </td>
                <td colspan=""></td>
              </tr>
            </table>
          </form>
        </td>
      </tr>
    </table>
  </body>
</html>