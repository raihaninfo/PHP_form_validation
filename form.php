<section class="main-body bg-dark text-white">
            <table>
            <p>* Reqerd Filed </p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <tr>
                        <td>Name : </td>
                        <td><input name="name" type="text"><span style="font-size: 30px;">*</span><?php echo $errname; ?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><input name="email" type="email"><span style="font-size: 30px;">*</span><?php echo $erremail; ?></td>
                    </tr>
                    <tr>
                        <td>Website : </td>
                        <td><input name="website" type="text"><span style="font-size: 30px;">*</span><?php echo $errweb; ?></td>
                    </tr>
                    <tr>
                        <td>Comment : </td>
                        <td><textarea name="comment" name="" id="" cols="18" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender : </td>
                        <td>
                            <input type="radio" name="gender" value="male" id=""> Male
                            <input type="radio" name="gender" value="female" id=""> Female
                            <span style="font-size: 30px;">*</span> <?php echo $errgender; ?>
                        </td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input name="submit" type="submit" value="Submit">
                        </td>
                    </tr>

                </form>
            </table>
        </section>