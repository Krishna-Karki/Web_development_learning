<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>
            <head>
                <style>
                    .books{
                        background-color: green;
                    }
                    .book1{
                        color: red;
                    }
                </style>
            </head>
            <body>
                
                <div class="books">

                    <div class="book1">
                        <p>Book name:
                            <xsl:value-of select="BOOKS/BOOK[1]/BOOK_NAME"></xsl:value-of>
                        </p>
                        <p>
                            Author:
                            <xsl:value-of select="BOOKS/BOOK[1]/AUTHOR"></xsl:value-of>
                        </p>
                        <p>
                            Price:
                            <xsl:value-of select="BOOKS/BOOK[1]/PRICE"></xsl:value-of>
                        </p>
                        <p>
                            Pages:
                            <xsl:value-of select="BOOKS/BOOK[1]/TOTAL_PAGES"></xsl:value-of>
                        </p>
                        <hr/>
                    </div>
                    <div class="publisher">
                        <p>
                            Publisher name:
                            <xsl:value-of select="BOOKS/BOOK[1]/PUBLISHER/PUBLISHER_NAME"></xsl:value-of>
                        </p>
                        <p>
                            Publisher date:
                            <xsl:value-of select="BOOKS/BOOK[1]/PUBLISHER/PUBLISHER_DATE"></xsl:value-of>
                        </p>
                        <hr/>
                        <div class="address">
                            <p>
                                City:
                                <xsl:value-of select="BOOKS/BOOK[1]/PUBLISHER/ADDRESS/CITY"></xsl:value-of>
                            </p>
                            <p>
                                Country:
                                <xsl:value-of select="BOOKS/BOOK[1]/PUBLISHER/ADDRESS/COUNTRY"></xsl:value-of>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </body>
        </html>

    </xsl:template>

</xsl:stylesheet>