<?php
include './layouts/top.php';
?>
<main> 
<!-- <div class="container-fluid px-4 "> -->
        <div class="page-header mb-5 bg-primary">
           <h1>Add Module</h1>
        </div>
      
        <div class="w-75 p-2 m-auto" style="background-color:lightgray">
                         <asp:Label ID="Label2" runat="server" Text=""></asp:Label>
            <asp:Label ID="Label1" runat="server" Text=""></asp:Label>
            <div class="row p-3">
                <asp:Label CssClass="form-label col-2" runat="server">Title</asp:Label>
                <asp:TextBox ID="tdTitle" CssClass="form-control col-10" runat="server" Text="" ></asp:TextBox>

            </div>


            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Description</asp:Label>
                <asp:TextBox ID="tdDescription" CssClass="form-control col-10" runat="server" TextMode="MultiLine" Text=""></asp:TextBox>
            </div>

            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Ingredients</asp:Label>
                <asp:TextBox ID="tdIngredients" CssClass="form-control col-10" runat="server" TextMode="MultiLine" Height="87px" Width="802px"></asp:TextBox>
            </div>

            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Recipe</asp:Label>
                <asp:TextBox ID="tdRecipe" CssClass="form-control col-10" runat="server" TextMode="MultiLine" Height="98px" Width="802px"></asp:TextBox>
            </div>
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Time</asp:Label>
                <asp:TextBox ID="tdTime" CssClass="form-control col-10" runat="server" ></asp:TextBox>
            </div>
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Temperature</asp:Label>
                <asp:TextBox ID="tdTemperature" CssClass="form-control col-10" runat="server" ></asp:TextBox>
            </div>
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label ">Servring Suggestions</asp:Label>
                <asp:TextBox ID="tdServr" CssClass="form-control col-10" runat="server" TextMode="MultiLine" Height="64px" Width="795px"></asp:TextBox>
            </div>
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Tips:</asp:Label>
                <asp:TextBox ID="tdTips" CssClass="form-control col-10" runat="server" TextMode="MultiLine" Height="84px" Width="803px"></asp:TextBox>
            </div>
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Author Name </asp:Label>
                <asp:TextBox ID="tdAuthor" CssClass="form-control col-10" runat="server"></asp:TextBox>
                <br />
            </div>
           <div class="row ">
                <div class=" col-md-6 col-sm-12 p-3">
                     <asp:Label ID="photo_video_msg" runat="server" Text="selected Before"></asp:Label>
                
                 <asp:Label ID="labPhotoName" runat="server" Text="Label"></asp:Label>
                <asp:Label runat="server" CssClass="form-label col-2">Upload Photo</asp:Label>

                <asp:FileUpload ID="PhotoPath" CssClass="form-control col-10" runat="server" EnableViewState="False" />
            </div>
     <!--       <div class="col-md-6 col-sm-12 p-3">
                <asp:Label ID="labVideoName" runat="server" Text="Label"></asp:Label>
                <asp:Label runat="server" CssClass="form-label col-2">Upload Video</asp:Label>
                 
               
                <asp:FileUpload ID="VideoPath" CssClass="form-control col-10" runat="server" EnableViewState="False" />
            </div>
               -->
           </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Avarage rate</asp:Label>
                <asp:TextBox ID="tdAvarageRate" CssClass="form-control col-10" runat="server"></asp:TextBox>
                    </div>
            </div>
            
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Category </asp:Label>
                <asp:DropDownList ID="CategoryList" CssClass="form-control col-10" width="200px" runat="server">
                   <asp:ListItem cssClass="dropdown-header"  data-bs-toggle="dropdown">Item </asp:ListItem>
                    <asp:ListItem>Staters</asp:ListItem>
                    <asp:ListItem>DairyProduct</asp:ListItem>
                    <asp:ListItem>Veg</asp:ListItem>
                    <asp:ListItem>NonVeg</asp:ListItem>
                    <asp:ListItem>Beverages</asp:ListItem>
                    <asp:ListItem>FastFood</asp:ListItem>
                    <asp:ListItem>Breakfast</asp:ListItem>
                </asp:DropDownList>
            </div>
            <div class="row p-3">
                <asp:Label runat="server" CssClass="form-label col-2">Tags</asp:Label>
                <asp:TextBox ID="tdTags" CssClass="form-control col-10" runat="server" TextMode="MultiLine"></asp:TextBox>
            </div>
            <div class="row p-3">
                <asp:Button ID="btnSubmit" CssClass="form-control col-10 btn btn-secondary" runat="server" Text="Submit Recipe" OnClick="btnSubmit_Click"  />
            
            </div>
         
        <!-- </div> -->
                  
    </main>




<?php 
    include './layouts/bottom.php';
?>