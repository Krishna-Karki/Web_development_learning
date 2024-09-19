<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

    <html>
        <head>
            <style>

                    .name{,.code
                        font-size: 16pt;
                        color: green;
                        font-weight: bold;
                    }
                    .stock{
                        color: red;
                    }
                    .price{
                        font-size: 14pt;
                    }

            </style>
        </head>

        <body>
            
            <div class="products">
                <div class="product">
                    <p>ID:
                        <xsl:value-of select="Products/product[1]/id"></xsl:value-of>
                    </p>
                    <p class="name">Name:
                        <xsl:value-of select="Products/product[1]/name"></xsl:value-of>
                    </p>
                    <p class="code">C0de:
                        <xsl:value-of select="Products/product[1]/code"></xsl:value-of>
                    </p>
                    <p>Category:
                        <xsl:value-of select="Products/product[1]/category"></xsl:value-of>
                    </p>
                    <p class="price">Price:
                        <xsl:value-of select="Products/product[1]/price"></xsl:value-of>
                    </p>
                    <p class="stock">Stock:
                        <xsl:value-of select="Products/product[1]/stock"></xsl:value-of>
                    </p>
                </div>
            </div>
        </body>
    </html>

</xsl:template>

</xsl:stylesheet>